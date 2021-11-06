<?php

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
// Route::get('/', function () {
//     // Artisan::call('cache:clear');
//     // Artisan::call('config:clear');
//     // Artisan::call('route:clear');
//     Artisan::call('up');
//     return "Cache is cleared";
//     // dd('here');
// });

Route::get('/', 'front@index')->name('index');
Route::get('index', 'front@index')->name('index');
Route::get('about', 'front@about')->name('about');
Route::get('admission', 'front@admission')->name('admission');
Route::get('books', 'front@books')->name('books');
Route::get('applicationform', 'front@applicationform')->name('applicationform');
Route::get('assignment', 'front@assignment')->name('assignment');
Route::get('guesspaper', 'front@guesspaper')->name('guesspaper');
Route::get('results', 'front@results')->name('results');
Route::get('thesis', 'front@thesis')->name('thesis');
Route::get('practice', 'front@practice')->name('practice');
Route::get('compressor', 'front@compressor')->name('compressor');
Route::get('videolectures', 'front@videolectures')->name('videolectures');
Route::get('teaching', 'front@teaching')->name('teaching');
Route::get('research', 'front@research');
Route::get('dashboard', 'backend@dashboard')->name('dashboard');
Route::get('allassignment', 'backend@assignment');
Route::get('allthesis', 'backend@thesis');
Route::get('deletethesisfile/{id}', 'backend@deletethesisfile');


Route::get('deletethesislink/{id}', 'backend@deletethesislink');
Route::get('allguess', 'backend@guess');
Route::get('book', 'backend@book');
Route::post('addbook', 'backend@addbook');
Route::get('deletebook/{id}', 'backend@deletebook');
Route::get('deletebooks/{id}', 'backend@deletebooks');

Route::get('deletelink1/{id}', 'backend@deletelink1');
Route::get('deletelink2/{id}', 'backend@deletelink2');



Route::get('deletebooks1/{id}', 'backend@deletebooks1');
Route::post('updatebook1', 'backend@updatebook1');

Route::post('updatebook2', 'backend@updatebook2');


Route::post('editbook', 'backend@editbook');
Route::post('editbook1', 'backend@editbook1');



Route::post('addassignment', 'backend@addassignment');
Route::get('deleteassignment/{id}', 'backend@deleteassignment');
Route::post('editassignment', 'backend@editassignment');
Route::get('deletea1/{id}', 'backend@deletea1');
Route::get('deletea2/{id}', 'backend@deletea2');
Route::get('deletea3/{id}', 'backend@deletea3');
Route::get('deletea4/{id}', 'backend@deletea4');
Route::get('deletel1/{id}', 'backend@deletel1');
Route::get('deletel2/{id}', 'backend@deletel2');
Route::get('deletel3/{id}', 'backend@deletel3');
Route::get('deletel4/{id}', 'backend@deletel4');





Route::post('addthesis', 'backend@addthesis');
Route::get('deletethesis/{id}', 'backend@deletethesis');
Route::post('editthesis', 'backend@editthesis');


Route::post('addguess', 'backend@addguess');
Route::get('deleteguess/{id}', 'backend@deleteguess');
Route::post('editguess', 'backend@editguess');
Route::get('deletepdffile/{id}', 'backend@deletepdffile');
Route::get('deletepdffile1/{id}', 'backend@deletepdffile1');
Route::get('deletepdflink/{id}', 'backend@deletepdflink');
Route::get('deletepdflink1/{id}', 'backend@deletepdflink1');



Route::get('description', 'backend@description');
Route::get('user-logout', 'front@userLogout')->name('user.logout');
Route::post('adddescription', 'backend@adddescription');
Route::get('deletedescription/{id}', 'backend@deletedescription');
Route::post('editdescription', 'backend@editdescription');




/**
 * Front page routes (BY asif)
 */
Route::get('admission-detail/{category}', 'ManageDescriptionsController@admissionsDescription')->name('front.admission.detail');
Route::get('lms-portal', 'ManageDescriptionsController@lmsPortalTabs')->name('front.lms.portal.tab');
Route::get('compressor', 'ManageDescriptionsController@compressorTab')->name('front.compressor.tab');
Route::get('lms-portal/{category}', 'ManageDescriptionsController@lmsPortalDescription')->name('front.lms.portal');








Route::post('addlink', 'backend@addlink');
Route::get('alllinks', 'backend@links');
Route::get('deletelink/{id}', 'backend@deletelink');
Route::post('editlink', 'backend@editlink');
Route::post('addbanner', 'backend@addbanner');
Route::get('banners', 'backend@banners');
Route::post('editbanner', 'backend@editbanner');

Route::get('deletebanner/{id}', 'backend@deletebanner');
Route::post('addnotification', 'backend@addnotification');
Route::get('notification', 'backend@notification');
Route::get('deletenotifications/{id}', 'backend@deletenotifications');
Route::post('editnotifications', 'backend@editnotifications');
Route::post('addclass', 'backend@addclass');
Route::get('class', 'backend@class');
Route::post('editclass', 'backend@editclass');
Route::get('deleteclass/{id}', 'backend@deleteclass');


Route::get('alldata/{id}', 'backend@alldata')->name('alldata');
Route::get('alladata/{id}', 'backend@alladata')->name('alladata');
Route::get('alltdata/{id}', 'backend@alltdata');
Route::get('allgdata/{id}', 'backend@allgdata')->name('allgdata');
Route::get('allvdata/{id}', 'backend@allvdata')->name('allvdata');
Route::post('addvlink', 'backend@addvlink');
Route::get('video_lectures','front@video_lectures');
Route::get('deletevideos/{id}', 'backend@deletevideos');
Route::post('editvideos', 'backend@editvideos');


Route::get('lessonplan', 'front@lessonplan')->name('lessonplan');

Route::post('addlesson', 'backend@addlesson');
Route::get('deletelesson1/{id}', 'backend@deletelesson1');
Route::get('deletelessonl1/{id}', 'backend@deletelessonl1');
Route::get('deletelesson/{id}', 'backend@deletelesson');
Route::post('editlesson', 'backend@editlesson');
Route::get('lesson', 'backend@lesson');

////////////////////////////////////comment//////////////////////////////////////

Route::post('addcomment', 'backend@addcomment')->name('add.new.comment');
Route::get('deletecomment/{id}', 'backend@deletecomment');

Route::post('addreply', 'backend@addreply')->name('add.new.reply');
Route::get('deletereply/{id}', 'backend@deletereply');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/comments', 'front@comments')->name('frontend.comments');

Route::get('admin/comments', 'HomeController@getCommentList')->name('backend.comments');
Route::get('remove/comments/{id}', 'HomeController@removeComment')->name('backend.comments.remove');
