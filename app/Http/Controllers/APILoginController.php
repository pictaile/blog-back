<?php
/**
 * Created by PhpStorm.
 * User: kostantyn
 * Date: 03.04.19
 * Time: 15:03
 */

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class APILoginController
{

    public function __construct(Request $request)
    {

    }

    public function login(Request $request)
    {


        return response()->json([] );
    }

}