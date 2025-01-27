<?php

namespace App\Repositories;

use App\Interfaces\RegisterInterface;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

 class  RegisterRepository implements RegisterInterface{

    public function  register($data){

        $user = User::create($data);
        // dd($user);
        if($user){
            // $user->sendEmailVerificationNotification();
            // event(new Registered($user));
            event(new Registered($user));
            return $user;
        }

    }

 }


