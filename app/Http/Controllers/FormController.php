<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Proverka;

class FormController extends Controller
{
    public function index(){
      return view('home');
    }

    public function createForm(Request $request){
      //dd($request->all());
      $formsave = new Form();
      $formsave->urlname = $request->urlname;
      $formsave->check_povtor = $request->povtor;
      $formsave->save();

      foreach ($request->proverka as $proverok) {
        //dd($proverok->);
        Proverka::create([
          'check_interval'=> $proverok,
          'form_id'=> $formsave->id
        ]);
      }

      return redirect()->back()->with('success', 'Form created successfully');
    }
}
