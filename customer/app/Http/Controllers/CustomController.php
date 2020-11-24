<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function numberCheck(CustomRequest $request)
    {
        echo "Right";
    }
}
