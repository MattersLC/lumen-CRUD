<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Response;
//use Illuminate\Http\Request;
//

use App\Plants;

class PlantsController extends Controller 
{
    use ApiResponser;

    public function __construct()
    {
        //
    }

    public function index(){
        $plants = Plants::all();
        return $this->successResponse($plants);
    }
}