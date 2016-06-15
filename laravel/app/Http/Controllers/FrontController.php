<?php

namespace POS\Http\Controllers;

use Illuminate\Http\Request;
use POS\Http\Requests;
use POS\Http\Controllers\Controller;

class FrontController extends Controller
{
   public function index(){
        return view('index');
   }

   public function avisos(){
        return view('avisos');
   }


   public function usuarioFree(){
        return view('usuarioFree.index');
   }

   public function admin(){
        return view('admin.index'); 
   }
}
