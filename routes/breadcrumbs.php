<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', '/');
});

// About
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('home');
    $trail->push('About', '/about');
});

// Team
Breadcrumbs::for('team', function ($trail) {
    $trail->parent('about');
    $trail->push('Team', '/team');
});

// Location
Breadcrumbs::for('location', function ($trail) {
    $trail->parent('about');
    $trail->push('Location', '/location');
});

// Contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', '/contact');
});

// Posts
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Posts', '/posts');
});

// Post
Breadcrumbs::for('post', function ($trail, $post) {
    $trail->parent('posts');
    $trail->push($post->title, '/posts/'.$post->id);
});
