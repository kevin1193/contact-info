<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 28/07/2018
 * Time: 10:57 AM
 */
Route::get('/', 'ContactController@index');
Route::post('/', 'ContactController@store');
