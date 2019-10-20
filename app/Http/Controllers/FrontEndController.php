<?php
/**
 * Created by PhpStorm.
 * User: Development
 * Date: 2/28/2019
 * Time: 11:19 AM
 */

namespace App\Http\Controllers;


use App\Activity;
use App\comments;

use App\Models\Images;
use App\users;
use Illuminate\Http\Request;


class FrontEndController extends Controller
{
    function index() {
        $image=Images::get();
       return view('pages/index',['image'=>$image,]);
    }




    function image(){

        if(request('s')){
            $s = request('s');
            $image = Images::where('title', 'LIKE', '%' . $s . '%')->paginate(1);
        }
        else{
            $image=Images::paginate(4);
        }

        $comments=comments::all();


        return view('pages/gallery',[
            'image'=>$image->appends(\Illuminate\Support\Facades\Request::except('page')),
            'comments'=>$comments,

        ]);
    }



    function show($id){
        $image=Images::get()->where('id_image','=',$id);

        $comments=users::select('comments.created_at','comments.text','users.username')->join('comments','users.id','=','comments.id_u')->join('images','comments.id_s','=','images.id_image')->where('images.id_image','=',$id)->get();

        return view('categories/categories',[
            'image'=>$image,
            'comments'=>$comments,
            'id' => $id,
        ]);

    }

    function store($id){
        $comment=new comments();
        $id_i=request('id_i');

        if(session()->has('user')){
              $idU=session('user')->id;
        }
        else {
          $idU=session('admin')->id;
        }



        $comment->text=request('comm');
        $comment->id_s=$id_i;
        $comment->id_u=$idU;
        $comment->save();

        return redirect()->back();
    }

    function user($id){
//        $user=users::get()->where('id','=',$id);
        $userID=session('user')->id;
        $userComments=users::join('comments','users.id','=','comments.id_u')->join('images','comments.id_s','=','images.id_image')->where('comments.id_u','=',$userID)->get();
        return view('pages/user',[

            'userComments'=>$userComments,
        ]);
    }
    function admin() {

        return view('pages/admin');
    }

    function manageUser() {
        $users=users::join('role','users.id_r','=','role.id_role')->get();
        return view('pages/userManage',[
            'users'=>$users
        ]);

    }

    function deleteUser($id){
        $deleteUser=users::where('users.id','=',$id)->delete();
        return redirect()->back();

    }

    function activity(){
        $act=Activity::get();
        $userComments=users::select('users.username','images.src','comments.text','comments.created_at')->join('comments','users.id','=','comments.id_u')->join('images','comments.id_s','=','images.id_image')->get();

        return view('pages/activity',[
            'act'=>$act,
            'userComments'=>$userComments
        ]);
    }

    function about(){
        return view('pages/about');
    }

    function author(){
        return view('pages/author');
    }

}

