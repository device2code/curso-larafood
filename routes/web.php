<?php
Route::prefix('admin')->namespace('Admin')->group( function() {
    /**
     * Details Plans
     */
    Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plan.store');
    Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plan.create');
    Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plan.index');


    /**
     * Plans
     */
    Route::any('plans/search', 'PlanController@search')->name('plans.search');
    Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
    Route::put('plans/{url}', 'PlanController@update')->name('plans.update');
    Route::get('plans', 'PlanController@index')->name('plans.index');
    Route::get('plans/create', 'PlanController@create')->name('plans.create');
    Route::post('plans','PlanController@store')->name('plans.store');
    Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
    Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');

    /**
     * Dashboard
     */
    Route::get('/', 'PlanController@index')->name('admin.index');
});





Route::get('/', function () {
    return view('welcome');
});
