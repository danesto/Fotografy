<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\users;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    function register(){
        return view('pages/register');
    }

    public function store(Request $request)
    {
        $user = new users();
        $validate = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'username'=>'required',
            'password' => 'required',
            'email'=>'required|email'
        ]);


        $user->name = request('name');
        $user->lastname=request('lastname');
        $user->username=request('username');
        $user->password=md5(request('password'));
        $user->email=request('email');
        $user->id_r=2;
        $user->save();

        return redirect()->back();
    }

    function createPosts(){

        $posts=Images::get();

        return view('pages/posts',['posts'=>$posts]);
    }

    function insertPost(Request $request){


        if($request->hasFile('file')){
        $image=new Images();

        $validate=$request->validate([
            'file'=>'required|image',
            'alt'=>'required|max:20',
            'titlePost'=>'required|max:50',
            'desciriptionPost'=>'required|max:255'
        ]);
        
        $fileName=$request->file->getClientOriginalName();
        $request->file->storeAs('public/img',$fileName);
        $image->src=$fileName;
        $image->alt=request('alt');
        $image->title=request('titlePost');
        $image->description=request('desciriptionPost');
        $image->save();

//            return redirect()->back()->with('message','You have uploaded post');
        }
        return redirect()->back();
    }

    function deletePost($id){

        $deletePost=Images::where('images.id_image','=',$id)->delete();
        return redirect()->back()->with('message','You have deleted post!');
    }

}
