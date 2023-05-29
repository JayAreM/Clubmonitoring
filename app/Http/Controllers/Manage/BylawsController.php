<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BylawsController extends Controller
{
    //
    public function index(Request $request  )
    {
        return view('Manage.pages.Bylaws.index');
    }
    

}
