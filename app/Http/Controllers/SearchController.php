<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index($searchTerm)
    {
        $results = [];
        return view('search.index',compact('searchTerm','results'));
    }
}
