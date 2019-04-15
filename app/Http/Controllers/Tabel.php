<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tabel extends Controller
{
  public function index(){
  	  return view("konten.tabel.index");
  }

}
