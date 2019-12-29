<?php

Route::get('/post/new', 'PostController@new');

Route::post('/post/add', 'PostController@add');

Route::post('/post/remove/{id}', [
    'as'    => 'post.remove',
    'uses'  => 'PostController@remove'
]);
