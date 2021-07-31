<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hachari;
use DB;

class HachariController extends Controller
{
   public function hachariplan()
    {
      $hachari = DB::table('hacharis')->get();

      return view('pages.hachariplan',compact('hachari'));
    }
    public function incubator1()
     {
       $hachari = DB::table('hacharis')->get();

       return view('pages.incubator1',compact('hachari'));
     }
     public function incubator2()
      {
        $hachari = DB::table('hacharis')->get();

        return view('pages.incubator2',compact('hachari'));
      }
      public function incubator3()
       {
         $hachari = DB::table('hacharis')->get();

         return view('pages.incubator3',compact('hachari'));
       }
       //animal///////////////////
       public function goru()
        {
          $hachari = DB::table('cows')->get();

          return view('pages.animal.goru',compact('hachari'));
        }
        public function goat()
         {
           $hachari = DB::table('hacharis')->get();

           return view('pages.animal.goat',compact('hachari'));
         }
}
