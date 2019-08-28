<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// News
Breadcrumbs::for('news', function ($trail) {
    $trail->push('News', route('news'));
});

// News
Breadcrumbs::for('article', function ($trail, $article) {
    $trail->parent('news', route('news'));
    $trail->push($article->title, secure_url('news/' . $article->slug));
});

// Events
Breadcrumbs::for('events', function ($trail) {
    $trail->push('Events', route('events'));
});

// Event
Breadcrumbs::for('event', function ($trail, $event) {
    $trail->parent('events', route('events'));
    $trail->push($event->name, secure_url('events/' . $event->slug));
});

// Wargames
Breadcrumbs::for('wargames', function ($trail) {
    $trail->push('Wargames', route('wargames'));
});

// Wargame
Breadcrumbs::for('wargame', function ($trail, $system) {
    $trail->parent('wargames', route('wargames'));
    $trail->push($system->name, secure_url('wargames/' . $system->slug));
});

// Roleplays
Breadcrumbs::for('roleplays', function ($trail) {
    $trail->push('Roleplays', route('roleplays'));
});

// Roleplay
Breadcrumbs::for('roleplay', function ($trail, $system) {
    $trail->parent('Roleplays', route('roleplays'));
    $trail->push($system->name, secure_url('roleplays/' . $system->slug));
});