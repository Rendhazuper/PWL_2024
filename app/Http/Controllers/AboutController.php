<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){ 
        return 'NIM : 2341720010 <br> Nama : Rendha Putra Rahmadya';
        }

   public function user($name = null){
       return 'Nama Saya ' . $name;
   }

}