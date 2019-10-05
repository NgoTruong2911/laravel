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
use App\Models\User;
use Illuminate\Http\Request;
use Faker\Generator as Faker;
use App\Models\Product;
use App\Models\Warehouse;
Route::get('welcome', function () {
  return view('welcome');
})->name('welcome');

Route::get('users', function () {
  $users=factory(App\Models\User::class, 10)->make()->toArray();
  return view('users',['users'=>$users]);
})->name('user');

Route::get('warehouses', function () {
  $warehouses=factory(App\Models\Warehouse::class, 10)->make()->toArray();
  return view('warehouses',['warehouses'=>$warehouses]);
})->name('warehouses');

// start create //

Route::post('users/store', function (Request $req) {
  $req->validate([
    'name' => 'required|max:255',
    'email' => 'required|email',
    'birth' => 'required|date_format:Y/m/d',
    'phone_number' => 'required',
    'password' => 'required'
]);
  User::create($req->all());
  return redirect()->route('users.index');
})->name('users.store');

//endcreate() //

// start show(read) //

Route::get('find/{id}', function ($id) {
  $users_id = User::find($id);
  return view('find',['users_id'=>$users_id]);
})->name('users.show'); // find()

Route::view('users/create','users/create')->name('users.create');

Route::get('all', function () {
  $users = User::all();
  return view('all',['users'=>$users]);
})->name('users.index');// all()

Route::get('save/{id}', function ($id) {
  $users = User::find($id);
  $users->name='ngotruong291199';
  $users->email='kizth123@gmail.com';
  $users->birth='1999-11-29';
  $users->phone_number='+84984918726';
  $users->role=2;
  $users->save();
  return view('save',['users'=>$users]);
})->name('users.update');// save()

Route::get('update/{id}', function ($id) {
  $users = User::find($id);
  $users->update([
    'name'=>'ngotruong2',
    'email'=>'nkizth123@gmail.com',
    'birth'=>'1999-11-20',
    'phone_number'=>'+84984918726',
    'role'=>'1'
  ]);
  return view('update',['users'=>$users]);
})->name('users.edit');// update()

// Route::get('delete/{id}', function ($id) {
//   $users = User::find($id);
//   $ware = Warehouse::where('stockkeeper_id',$users->id)->get();
//   Product::where('warehouse')->destroy($ware->pluck('id')->toArray());
//   Warehouse::destroy($ware->pluck('id')->toArray());
//   $users->delete();
//   return view('delete',['users'=>$users]);
// })->name('delete-user');// delete()
//end show(read) //
