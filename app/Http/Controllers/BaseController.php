<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat as Cat;
use App\Gender as Gender;

class BaseController extends Controller
{

    public function index()
    {
      $cats = Cat::all();
      return view('acceuil', ['cats' => $cats]);
    }
}
