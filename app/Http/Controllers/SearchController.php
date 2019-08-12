<?php

namespace App\Http\Controllers;
use App\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
 public function index()
 {
     return view('search.index');
 }

    public function show($searchTerm='')
    {
        $results = [];
        if($searchTerm == ''){
            return view('search.index');
        }
        $results = Search::search($searchTerm);
        return view('search.show', compact('searchTerm', 'results'));
    }
    public function redirect(Request $request){
        return redirect('search/'.$request->q);
    }
}
