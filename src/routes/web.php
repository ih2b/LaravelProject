<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','WelcomeController@index' )->name('index');


Route::get('/JEPROPOSEMAFORMATION', 'PropositionController@create');
Route::post('/JEPROPOSEMAFORMATION','PropositionController@store' )->name('storeproposition');



Route::get('/AboutUs','AboutUsController@create' );




Route::get('/Contact','ContactController@create' );
Route::post('/Contact','ContactController@store' )->name('storecontact');



Route::get('/Catalogue','CatalogueController@index' );







Route::get('/Formations','FormationFrontController@index' );
Route::get('/forma/{id}','FormationController@show' );


Route::post('/commentaire','CommentaireController@store' )->name('commentaire');
Route::get('/commentaires','CommentaireController@index' )->name('commentaires');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth','admin'])->group(
function(){

Route::get('/admin','AdminController@index' )->name('admin');
Route::get('/calender','CalendarController@index' );
Route::delete('/deleteProposition/{id}','PropositionController@destroy' )->name('deleteproposition');
Route::get('/PropositionMaster', 'PropositionController@index');


Route::get('/fullcalendar','FullCalendarEventMasterController@index');
Route::post('/fullcalendar/create','FullCalendarEventMasterController@create');
Route::post('/fullcalendar/update','FullCalendarEventMasterController@update');
Route::post('/fullcalendar/delete','FullCalendarEventMasterController@destroy');


Route::get('/Formation','FormationController@index' );
Route::get('/formationcreate','FormationController@create' );
Route::post('/formationcreate','FormationController@store' )->name('store');
Route::get('/editformation/{id}','FormationController@edit' )->name('editformation');
Route::post('/updateformation/{id}','FormationController@update' )->name('updateformation');
Route::delete('/deleteformation/{id}','FormationController@destroy' )->name('deleteformation');

Route::get('/categoriecreate','CategorieController@create' );
Route::post('/categoriecreate','CategorieController@store' )->name('storecategorie');
Route::get('/categories','CategorieController@index' );

Route::get('/Contactmaster','ContactController@index' );
Route::delete('/deleteContact/{id}','ContactController@destroy' )->name('deletecontact');
Route::get('/inscriptions','InscriptionController@index' )->name('inscriptions');
Route::get('/evaluations', 'EvaluationController@index');
Route::get('/evaluation', 'EvaluationController@create')->name('eva');
Route::post('/evaluation', 'EvaluationController@store')->name('evastore');
Route::get('/repevaluationS', 'RepeavaluationController@index');
});


Route::middleware(['auth','author'])->group(
function(){
Route::post('/inscription','InscriptionController@store' )->name('inscription');
Route::get('/repevaluation/{id}', 'RepeavaluationController@show');
Route::post('/repevaluation', 'RepeavaluationController@store')->name('repeval');
});
