<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
   public function AddToCart(Request $request){
       $pid = $request->post('ids');
       $qty = $request->post('qty');
       $spdt = Session::get('pdtId');
       $sqty = Session::get('qtyId');

       if ($spdt){
           $index = array_search($pid,$spdt);
            if ($index !== false){

                $sqty[$index]  = $qty;
                $msg = "Update successfully";
            }else{
                $spdt[] = $pid;
                $sqty[] = $qty;
                $msg = "Add successfully 2";
            }
       }else{
           $spdt[] = $pid;
           $sqty[] = $qty;
           $msg = "Add successfully 1";
       }

       Session::put('pdtId' , $spdt);
       Session::put('qtyId' , $sqty);

//    echo $request->post('qty');
//       echo $request->post('ids');
//    echo "hello world";
       echo $msg;
   }
   public  function Checkout(){
       $arr = array();
       $spdt = Session::get('pdtId');
       $sqty = Session::get('qtyId');

       if (!$spdt){
           return redirect('/');
       }
//       $ids = 11;


       $arr['allPdt'] = DB::table("products")->whereIn("id", $spdt)->get();
//       $arr['alldata'] = parent::CallRaw("chackout", array($ids));
//       echo  "<pre>";
//       print_r($arr['alldata'][2]);
//       print_r($arr['allPdt']);
//       echo  "</pre>";
       return view('fontEnd.includes.chackout')->with($arr);

//       echo "hello world";
   }
}
