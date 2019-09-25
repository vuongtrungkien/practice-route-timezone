<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function calculateAge(Request $request)
    {

        $birthDay = $request->input('birthday');
        $result = Carbon::parse($birthDay)->age;

        return view('index', compact(['result']));

    }
}
