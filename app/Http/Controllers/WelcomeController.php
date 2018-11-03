<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public  function index(){
        $arr = array();
        $arr['tinymce'] = 1;
        $arr['title'] = "Home Page | php.com";
        $arr['allpdt'] = parent::CallRaw("home", array());

//        echo "<pre>";
//        print_r($arr['allData']);
//        echo "</pre>";

    return view('fontEnd.home.homeContent')->with($arr);
    }
    public function category($slug1, $slug2){
        $arr = array();
        $arr['title'] = "Details | php.com";
        $arr['allData'] = parent::CallRaw("category", array($slug2));

        echo "<pre>";
        print_r( $arr['allData']);
        echo "</pre>";
        die();

    }
    public function subcategory($slug1, $slug2, $slug3){

        echo $slug3;
    }

    public function details($slug1,$slug2,$slug3,$slug4){
        $arr = array();
        $arr['title'] = "Details | php.com";
        $arr['allData'] = parent::CallRaw("details", array($slug3));


//        echo "<pre>";
//        print_r($arr['alldata'][2]);
//        echo "</pre>";
//        echo $arr['alldata'][2]->title;

//        foreach ($arr['alldata'][2] as $pdt) {
//            echo "$pdt->cname";
//            echo "<br/>";
//            echo "$pdt->scname";
//            echo "<br/>";
//            echo "$pdt->id";
//
//        }
        return view('fontEnd.includes.details')->with($arr);
    }
}
