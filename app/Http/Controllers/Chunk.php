<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Chunk extends Controller
{
    public function showAllUsers(){
        User::select('id', 'name', 'email')->chunk(100, function ($users) {
            foreach ($users as $user){
                echo $user->name;
            }
        });
    }
}
