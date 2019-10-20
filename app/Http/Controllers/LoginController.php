<?php

namespace App\Http\Controllers;


use App\Activity;
use App\users;
use DemeterChain\A;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    function create(){
        return view('pages/login');
    }
    public function login(Request $request){
//        dd($request);
        if($request->has("login")){
            $password=$request->input('pass');
            $email=$request->input("email");


            $user = new users();

            $user->checkUser($password, $email,2);

            $user_for_session = $user->getUser($password, $email,2);
            $admin_for_session = $user->getUser($password, $email,1);


            $isAdmin = $user->checkAdmin($password, $email,1);


            if($user){
                $request->session()->put('user', $user_for_session);
                    if(session()->has('user')){
                        $activity=new Activity();

                        $name=session()->get('user')->name;
                        $lastname=session()->get('user')->lastname;
                        $email=session()->get('user')->email;

                        $activity->ime=$name;
                        $activity->prezime=$lastname;
                        $activity->email=$email;
                        $activity->save();
                    }
                if ($isAdmin) {
                    $request->session()->put('admin', $admin_for_session);

                    return redirect("admin")->with("poruka","Uspesno Logovanje Admine");
                }
                else {
                    return redirect("/")->with("poruka","Uspesno Logovanje");

                }

            }


            else{
                redirect()->back()->with("poruka","Niste registrovani");
            }
        }
    }
    public function logout (Request $request){

        if($request->session()->has('user')){

            $request->session()->forget('user');
            $request->session()->flush();
            return redirect("/")->with('poruka','Uspesno ste se izlogovali');
        }

        if($request->session()->has('admin')){

            $request->session()->forget('admin');
            $request->session()->flush();
            return redirect('/');
        }
    }
}
