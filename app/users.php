<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class users extends Model
{
    protected $table='users';

    public function checkUser($password, $email,$id_r){
        return DB::table($this->table)->where([
            ["password","=",md5($password)],
            ["email","=", $email],
            ["id_r","=",$id_r]

        ])->first();
    }

    public function checkAdmin($password, $email,$id_r){
        return DB::table($this->table)->where([
            ["password","=",md5($password)],
            ["email","=", $email],
            ["id_r","=",$id_r]

        ])->first();
    }

    public function getUser($password, $email, $id_r){
        return DB::table($this->table)->where([
            ["password","=",md5($password)],
            ["email","=", $email],
            ["id_r","=",$id_r]
        ])->first();
    }


}
