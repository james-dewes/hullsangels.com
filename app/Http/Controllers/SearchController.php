<?php

namespace App\Http\Controllers;
use App\Search;

class SearchController extends Controller
{
    public function index($searchTerm)
    {

        $results = Search::search($searchTerm);
        return view('search.index', compact('searchTerm', 'results'));
    }
}
