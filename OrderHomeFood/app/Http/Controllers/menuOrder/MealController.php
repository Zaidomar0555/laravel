<?php

namespace App\Http\Controllers\menuOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Meal;


class MealController extends Controller
{

  public function __construct(){
      $this->middleware(['guest']);
  }

  // public function __construct(){
  //     $this->middleware(['auth']);
  // }





    public function index(){

        $meal = Meal::orderBy('type')->get();
        return view('menuOrder.menu', ['meals' => $meal]);

    }

  public function showTotal(/*$username*/){



    //$check =  Meal::where('name', $username)->get()->all();
    $count = Meal::count();
    $check = Meal::sum('price');
    // $testSumTwoCol = Meal::orderBy('')

    //$total = 0;

    // for($i = 0; $i<$count; $i++){
    //   $total = $check->values($i) + $total;
    // }


    if($check == true){
        dd($count,$check);
       //return view('menuOrder.mealDetails', ['memebrs' => $check]);
    }
    else{
      dd("name is not found");
    }



      //return view('menuOrder.mealDetails');

    }

    /*
    *   // the one below, i accessed meal table throgh the user, by using the pivot table
      // return User::find(1)->meal()->get();


      // the one below, i accessed user table throgh the meal, by using the pivot table
      //return Meal::find(1)->user()->get();


      //  $meal = JunctionTable::all();
      //  return view('menuOrder.menu', ['members' => $info]);
      //return view('menuOrder.menu');

    */





}
