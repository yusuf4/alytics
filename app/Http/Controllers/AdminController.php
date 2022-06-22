<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Proverka;

class AdminController extends Controller
{
    public function index(){
      $data = Form::get();
      /*foreach ($data as $value) {
      //  dd($value);
    } */
      return view('admin', compact('data'));
    }

    public function checkP(){
      $proverok = Proverka::get();
      foreach ($proverok as $value) {
        $item = $value;
    }
      return view('check', compact('proverok'));
    }
}
