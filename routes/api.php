<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryRegulationController;
use App\Http\Controllers\newsController;
use App\Model\categoryRegulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regulationFileController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

// Query data

Route::post('searchUser','adminController@searchUser');
Route::post('validUser',  'adminController@queryUser');
Route::post('checkYear','yearController@checkYear');
Route::post('checkCategory','categoryRegulationController@checkCategory');
Route::post('checkRegulation','regulationController@checkRegulation');




// Add data

Route::post('addUsers',  'adminController@addUsers');
Route::post('addCategory','categoryRegulationController@addCategory');
Route::post('addRegulation/','regulationController@addRegulation');
Route::post('addYear','yearController@addYear');
Route::post('addNews','newsController@addNews');
Route::post('uploadFile','regulationFileController@storeFile');
Route::post('addStructureimg','structurePageController@addStructureimg');
// Route::post('uploadFile','fileController@storeFile');


//Update

Route::post('editCategory','categoryRegulationController@updateCategory');
Route::post('editYear','yearController@editYear');
Route::post('editRegulation','regulationController@editRegulation');
Route::post('editStructureImage','structurePageController@editStructureImage');
Route::post('editNews','newsController@editNews');

Route::post('editFile','regulationFileController@editFile');



// Get data

Route::get('getRegulationFile' , 'regulationFileController@index');
Route::get('getAdmin' , 'adminController@index');
Route::get('getSector', 'sectorController@getSector');


// Get by id

Route::get('getUserInfo/{id}','adminController@getUsers');
Route::get('getCategory/{id}','categoryRegulationController@getCategory');
Route::get('getUserByUid/{id}','adminController@getUserByUid');

Route::get('getRegulationType/{id}/sectorID/{sector_id}','regulationController@getRegulationType');
// Route::get('getFile/{id}/sectorID/{sector_id}','regulationController@getRegulationFile');
// Route::get('getFile/{id}/cate/{category_regulaiton_id}/reg/{regulaiton_type}','regulationController@getRegulationFile');
// Route::get('getFile/{id}','regulationController@getRegulationFile');
Route::get('getFile/{id}','regulationFileController@getFile');
Route::get('getFiles/{id}','regulationFileController@getFiles');

Route::get('test','regulationFileController@test');


Route::get('getYear/{id}','yearController@getYear');

Route::get('getNews/{id}','newsController@getNews');
Route::get('getNewsInfo/{id}','newsController@getNewsInfo');
Route::get('getStructureImage/{id}','structurePageController@getStructureImage');
Route::get('getSectorImage/{id}','structurePageController@getSectorImage');





// Remove data

Route::get('removeCategory/{id}','categoryRegulationController@removeCategory');
Route::get('removeType/{id}','regulationController@removeRegulation');

Route::get('removeYear/{id}','yearController@removeYear');
Route::get('removeImage/{id}','sectorImageController@removeImage');
Route::get('removeFile/{id}','regulationFileController@removeFile');
Route::get('removeFiles/{id}','regulationFileController@removeFiles');
Route::get('removeNews/{id}','newsController@removeNews');
Route::get('removeStructureImage/{id}','structurePageController@removeStructureImage');


// Route::get('removeFile/{id}',[regulationFileController::class,'removeFile']);








// php artisan make:model Model/admin -m
// php artisan make:seeder seederAdmin
// php artisan make:Controller adminController
// php artisan migrate:fresh --seed
