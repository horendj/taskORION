<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
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
//     return view('users');
// });
//
// Route::get('/users', function () {
//     return view('users');
// });
//
// Route::get('/richUsers', function () {
//     return view('richUsers');
// });
//
// Route::get('/selectUser', function () {
//     return view('selectUser');
// });
//
// Route::get('/sendmail', 'Ajax\PersonController@send');

Route::get('/{any}', 'SpaController@index')->where('any', '.*');

//Route::get('/', function () {
//один-многог
  // $addresses = \App\Models\Address::all();
  // foreach ($addresses as $address){
  //   echo 'Address:  '.$address['city'].$address['street'].$address['suite'].'</br>';
  //   echo 'Person: ';
  // foreach ($address->people as $person){
  //   echo $person['name'].'<br />';
  // }
  //     echo "------------------------------------</br>";
  // }

//   $people = \App\Models\Person::all();
//
//   foreach ($people as $person){
//     echo 'Person:  '.$person['name'].', '.$person['email'].', '.$person['car'].', '.$person['salary'].'<br />';
//     echo 'Adress: '.$person->address['city'].'<br />';
//     echo "------------------------------------<br />";
// }

//много-много
// $companies = \App\Models\Company::all();
// foreach ($companies as $company){
//     echo 'Company: '.$company['name'].'<br />';
//     echo 'Persons: ';
//     foreach ($company->people as $person){
//       echo $person['name'].', ';
//     }
//     echo '<br />';

// $people = \App\Models\Person::all();
// foreach ($people as $person){
//     echo 'Persons: '.$person['name'].'<br />';
//     echo 'Company: ';
//     foreach ($person->companies as $company){
//       echo $company['name'].', ';
//     }
//     echo '<br />';


//}
//});
