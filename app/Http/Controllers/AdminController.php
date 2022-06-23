<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Proverka;
class AdminController extends Controller
{
    public function index(){
      $data = Form::get();

      $url = curl_init();
      foreach ($data as $value) {
        curl_setopt($url, CURLOPT_URL, $value->urlname);
        curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
        foreach ($value->proverkaInterval as $interval) {
          //dd($interval);
          curl_setopt($url, CURLOPT_TIMEOUT, $interval->check_interval);
        }
        //curl_setopt($url, CURLOPT_TIMEOUT, 3);
        $http_respond = trim(strip_tags(curl_exec($url)));
        $http_code = curl_getinfo($url, CURLINFO_HTTP_CODE);
        //dd($url);
        if(($http_code == "200") || ($http_code=="301")||($http_code=="302")) {
          echo "working";
          //return true;
        }else{
          echo "not";
        }
        dd($url);
      }

      curl_close($url);
      return view('admin', compact('value'));
    }

    public function checkP(){
      $proverok = Proverka::get();
      foreach ($proverok as $value) {
        $item = $value;
    }
      return view('check', compact('proverok'));
    }
}
