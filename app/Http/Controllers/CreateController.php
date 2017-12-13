<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\Color;

class CreateController extends Controller
{
    public function index()
    {
      $gendersAll = Gender::all();
      //pour gerer le formulaire
      $genders = [];//array vide
      foreach ($gendersAll as $value) {
        $genders[$value->id] = $value->gender;// on met les gender dans un array
      }

      $colorsAll = Color::all();
      //pour gerer le formulaire
      $colors = []; //array vide
      foreach ($colorsAll as $value) {
        $colors[$value->id] = $value->color; // on met les couleur dans un array
      }
      return view('create', ['genders' => $genders, 'colors' => $colors]);
    }
}
