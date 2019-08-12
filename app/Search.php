<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\News;
use App\Events;
use App\Wargames;
use App\Roleplay;


class Search extends Model
{
    public static function search($searchTerm){
        $newsResults = News::where('title', 'LIKE', '%' . $searchTerm . '%')
        ->orWhere('content', 'LIKE', '%' . $searchTerm . '%')
        ->get();
        $eventsResults = Events::where('name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')
                ->get();
        $wargamesResults = Wargames::where('name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')
                ->get();
        $roleplayResults = Roleplay::where('name', 'LIKE', '%' . $searchTerm . '%')
                ->orWhere('description', 'LIKE', '%' . $searchTerm . '%')
                ->get();

        return  $newsResults->merge($eventsResults)
                            ->merge($wargamesResults)
                            ->merge($roleplayResults);
    }
}
