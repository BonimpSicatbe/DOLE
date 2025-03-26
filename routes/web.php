<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;

// Route::get('/', function () {
//     return "Hello World";
// })->name('welcome');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// display all users
Route::get('/user/all', function () {
    // return User::all();
    return view('users', ['users' => User::all()]);
});

// user display
Route::get('/{barcode}', function ($barcode) {
    $barcode = "https://dinosaur-intense-duckling.ngrok-free.app/{$barcode}";

    $user = User::where('qr_code', $barcode)->first();
    
    if ($user) {
        return view('user', ['user' => $user]);
    } else {
        return response()->json(['message' => 'QR Code not found.', 'qr_code' => $barcode], 404);
    }
    
    // if (User::where('qr_code', $barcode)->first()) {
    //     return User::where('qr_code', $barcode)->get();
    // } else {
    //     return response()->json(['message' => 'QR Code not found.', 'qr_code' => $barcode], 404);
    // }
    
});
