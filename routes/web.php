<?php

Route::get('/', function () {
    return view('welcome');
});
Route::view('customers', 'customers');
