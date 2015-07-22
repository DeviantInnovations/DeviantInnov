<?php

namespace DeviantInnov\Http\Controllers;

use Illuminate\Http\Request;

use DeviantInnov\Http\Requests;
use DeviantInnov\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return view('pages.index');
    }
    public function about()
    {
        //
        return 'Welcome to DeviantInnov!';
    }

   
}
