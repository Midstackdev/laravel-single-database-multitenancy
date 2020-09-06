<?php


Route::post('/projects', 'ProjectController@store')->name('project.store');
Route::get('/projects/{project}', 'ProjectController@show')->name('projects.show');
Route::get('/{company}', 'DashboardController@index')->name('company.index');
