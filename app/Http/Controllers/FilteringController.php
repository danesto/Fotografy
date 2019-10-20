<?php
/**
 * Created by PhpStorm.
 * User: Development
 * Date: 2/28/2019
 * Time: 12:43 PM
 */

namespace App\Http\Controllers;


use App\Models\CityImages;
use App\Models\Categories;

class FilteringController extends Controller
{
    function getCategory($name){

        $filterCategory = Categories::where('type','=',$name)->get();

        return view('pages/categories',[
            'Categories'=>$filterCategory
        ]);


    }



}