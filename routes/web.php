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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcome');
});

//TESTING ROUTE
// Route::get('/testing', function () {
//     return view('testing');
// });
// Route::get('signup', function () {
//     return view('signup');
// });
// Route::get('signin', function () {
//     return view('signin');
// });

//check status
Route::get('/cscpage', function () {
    return view('cscpage');
});


Route::get('/appli', function () {
    return view('ApplicationForm');
});
Route::get('/cscstatus','CheckstatusController@index');


// Route::get('list','ApplicationFormController@store');
// Route::post('signupsubmit','water@signup');

// Route::post('signinsubmit','water@signin');

// Route::post('application_form','ApplicationFormController@store');


Route::post('/application','ApplicationFormController@store');
Route::get('forwardere','ExecutiveController@show');
Route::get('forwarderj','JuniorengineerController@show1');
Route::get('forwarders','SupritendentengineerController@show2');
Route::get('forwarderc','SectionclerkController@show3');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/executiveengineer/{id}','ExecutiveController@retrive');
Route::get('/juniorengineer/{id}','JuniorengineerController@retrive1');
Route::get('/supritendentengineer/{id}','SupritendentengineerController@retrive2');
Route::get('/sectionclerk/{id}','SectionclerkController@retrive3');


//Contact us
Route::get('/Contact', function () {
    return view('contact');
});
//disclamer
Route::get('/disclamer', function () {
    return view('disclamer');
});

Route::get('/privacy', function () {
    return view('privacy');
});

//rules
Route::get('/rules', function () {
    return view('rules');
});

//Aproval
route::post("/result/{id}","UpdateexecutiveController@update");
route::post("/result1/{id}","UpdatejuniorController@update2");
route::post("/result2/{id}","UpdatesupritendentController@update4");
route::post("/result3/{id}","UpdateclerkController@update6");


//rejection
route::post("/remarkssubmite/{id}","UpdateexecutiveController@update1");
route::post("/remarkssubmitj/{id}","UpdatejuniorController@update3");
route::post("/remarkssubmits/{id}","UpdatesupritendentController@update5");
route::post("/remarkssubmitc/{id}","UpdateclerkController@update7");

//suggestion
// route::post("/suggestione/{id}","UpdateexecutiveController@suggestione");
// route::post("/suggestionj/{id}","UpdatejuniorController@suggestionj");
// route::post("/suggestions/{id}","UpdatesupritendentController@suggestions");
// route::post("/remarkssubmitc/{id}","UpdateclerkController@update7");

Route::get('/ack', function () {
    return view('acknowledgement');
});

//downloads executive
Route::get('/download1/{id}','ExecutiveController@download1');
Route::get('/download2/{id}','ExecutiveController@download2');
Route::get('/download3/{id}','ExecutiveController@download3');


//downloads junior
Route::get('/download4/{id}','ExecutiveController@download4');
Route::get('/download5/{id}','ExecutiveController@download5');
Route::get('/download6/{id}','ExecutiveController@download6');

//downloads supritendent
Route::get('/download7/{id}','ExecutiveController@download7');
Route::get('/download8/{id}','ExecutiveController@download8');
Route::get('/download9/{id}','ExecutiveController@download9');


// check status
//acknowledgement download
Route::get('/acknowledgement/{id}','DownloadController@ack');

//reciept
Route::get('/reciept/{id}','DownloadController@reciept');

//search
Route::get('/search','CheckstatusController@search');