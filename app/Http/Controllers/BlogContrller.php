<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogContrller extends Controller
{
    public function index(){

        $mesages = [
            ['name'=>'Este es el post 1'],
            ['name'=>'Este es el post 2'],
            ['name'=>'Este es el post 3'],
            ['name'=>'Este es el post 4'],
            ['name'=>'Este es el post 5']
        ];

        return view('layout.blog',  ['messages' => $mesages]);
    }
}
