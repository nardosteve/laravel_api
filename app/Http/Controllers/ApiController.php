<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function getData(){
        //Key: Value
        //Return in JSON
        $someData = [
            'name' => 'Stephen Mungai Muroki',
            'username' => 'smungaimuroki',
            'email' => 'smungaimuroki@gmail.com',
            'password' => '@password1234'
        ];

        return $someData;
    }
}
