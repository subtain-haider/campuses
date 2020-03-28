<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
        ->namespace('Sibtain\Campuses\App\Http\Controllers\Campuses')
            ->prefix('api/campuses')
            ->as('campuses.')
            ->group(function () {

//		Route::get('', 'Index')->name('index');
		Route::get('create', 'Create')->name('create');
		Route::post('', 'Store')->name('store');
		Route::get('{campus}/edit', 'Edit')->name('edit');

		Route::patch('{campus}', 'Update')->name('update');

		Route::delete('{campus}', 'Destroy')->name('destroy');

		Route::get('initTable', 'InitTable')->name('initTable');
		Route::get('tableData', 'TableData')->name('tableData');
		Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

		Route::get('options', 'Options')->name('options');
		Route::get('{campus}', 'Show')->name('show');


        });
