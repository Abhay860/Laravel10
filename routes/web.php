<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
// alpha numerical value used
// whereNumber('id');
// whereAlpha('id');
// whereIn('id',['movie','song','painting']);
// Route::get('/post/{id}',function(string $id){
//     if($id)
//     {
//         return "<h1>Post Id is :".$id."</h1>"; 
//     }
//     else
//     {
//         return "<h1>Id not found</h1>";
//     }
  
// })->where('id','[a-zA-Z]+');
Route::get('/',function(){
    return view('welcome');
});
Route::redirect('/welcome', '/', 301);
Route::get('/post',function(){
    return view('post');
});

Route::get('/show',function(){
    return view('show');
});

Route::get('/tests', function(){
    return view('test');
});

Route::get('/show',[demoController::class,'index']);

Route::get('/about',[demoController::class,'About']);

Route::get('/register',[RegistrationController::class,'index']);

Route::post('/register',[RegistrationController::class,'register']);

Route::get('/customer',function(){
$customers = Customer::all();
echo "<pre>";
print_r($customers->toArray());
});

Route::get('/customer_register',[CustomerController::class,'customer']); 