<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function basefungsi(){
    return view('base');
  }
  public function dashboardfungsi(){
    return view('dashboard');
  }
  public function tablefungsi(){
    return view('table');
  }
  public function chartfungsi(){
    return view('chart');
  }
  public function productfungsi(){
    return view('product');
  }
  
}
