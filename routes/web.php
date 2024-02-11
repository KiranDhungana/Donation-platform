<?php

use App\Http\Controllers\loginsignup;
// use App\Http\Controllers\Post;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Search;
use App\Http\Controllers\Superadmin;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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


// Route::get('/test', [UserController::class, 'test']);

Route::get('/register', [UserController::class, 'loadRegister']);
Route::post('/singups', [UserController::class, 'studentRegister'])->name('studentRegister');
// Route::get('/', [UserController::class, 'loadLogin']);
Route::get('/', function () {
    return view('homepage.landingpage');
});

Route::get('/logout', function () {
    Session::flush();
    redirect('/');
})->name('logout');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signups', function () {
    return view('loginsignup/signup');
})->name('signuppage');
;



Route::get('/login', [UserController::class, 'loadLogin']);


Route::get('/forgetpassword', function () {
    return view('forgetpassword');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/otp', function () {
    return view('otp');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/superadmin', function () {
    return view('superadmin');
});

Route::get('/post-campaign', function () {
    return view('postform');
});

Route::get('/home', function () {
    return view('homepage.landingpage');
});

Route::get('/campaigns', function () {
    return view('campaignPost');
});
// Route::get('/pay/{id}', function () {

//     return view('paymoney');
// });
Route::get('/pay/{id}', [Postcontroller::class, 'gotopay']);

// Auth::route();

Route::get('/homepage', function () {
    return view('homepage.landingpage');
})->name('login');



Route::post('/login', [loginsignup::class, 'userLogin'])->name('userLogin');

Route::get('/verification/{id}', [UserController::class, 'verification']);
Route::post('/verified', [UserController::class, 'verifiedOtp'])->name('verifiedOtp');
Route::get('/dashboard', [UserController::class, 'loadDashboard'])->middleware('auth');

Route::get('/resend-otp', [UserController::class, 'resendOtp'])->name('resendOtp');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/test', [UserController::class, 'test'])->name('test');
Route::get('/location', [UserController::class, 'getUserLocation'])->name('getUserLocation');
Route::post('/save-location', [UserController::class, 'savelocation'])->name('getUserLocation');
Route::post('/location', [UserController::class, 'handleData'])->name('store');

// change password
Route::get('/forgetpassword', [UserController::class, 'changepassword'])->name('changepassword');
Route::post('/forgetpassword', [UserController::class, 'resetpassword'])->name('resetpassword');
Route::get('/changepasswordnew/{id}', [UserController::class, 'changepasswordnew'])->name('changepasswordnew');
Route::post('/checkotp', [UserController::class, 'checkotp'])->name('checkotp');
Route::get('/setnewpassword/{id}', [UserController::class, 'setnewpassword'])->name('setnewpassword');
Route::post('/setnewpassword', [UserController::class, 'setnewpasswordpost'])->name('setnewpasswordpost');

// super admin routing 

Route::get('/superadmin/dashboard', function () {
    $data = user::all();
    $postdata = Post::all();
    return view('superadmin.homepage')->with('user', $data)->with('postdata', $postdata);
})->name('login')->middleware('super-admin-check');
Route::get('/post-to-approve', function () {
    $data = user::all();
    $postdata = Post::all();
    return view('superadmin.homepage')->with('user', $data)->with('postdata', $postdata);
})->name('login')->middleware('super-admin-check');


// delete user 
Route::post("/delete/{id}/{name}", [UserController::class, 'deleteuser'])->name('deleteuser');


Route::get('/superadmin', function () {
    return view('superadmin.homepage');
});

Route::get('/post', function () {
    return view('post');
});
Route::get('/postDetails', function () {
    return view('postDetails');
});
Route::get('/profile1', function () {
    return view('profile1');
});
Route::get('/addlocation', function () {
    return view('addlocation');
});

Route::get('/viewDocs', function () {
    return view('viewDocs');
});

// super admin routing 
Route::get("/documents/{id}", [Superadmin::class, 'viewdocuments'])->name('viewdocuments')->middleware('super-admin-check');

Route::get('/superadmin/postmanagement', function () {
    return view('superadmin.postmanagement');
});
Route::Post("/approve/{id}", [Superadmin::class, 'approveform'])->name('approveform')->middleware('super-admin-check');


// post add routing 

// Route::get("/postspace", [UserController::class, 'postspace'])->name('postspace')->middleware('auth');
// Route::post("/postspace", [UserController::class, 'postspacetodb'])->name('postspacetodb')->middleware('auth');
// Route::get("/like", [Postcontroller::class, 'like'])->name('like');


// profile routing 
Route::get("/setting/{id}/{name}", [UserController::class, 'userprofilesetting'])->name('userprofilesetting')->middleware('auth');
Route::get("/profile/{id}/{name}", [UserController::class, 'userprofile'])->name('userprofile')->middleware('auth');

// Route::get("/posts/{pid}/{district}/{name}", [UserController::class, 'viewuserpost'])->name('viewuserpost')->middleware('auth');

Route::Post("/contact", [UserController::class, 'mailsend'])->name('userprofile');



// ADDING POST ROUTING
Route::Post("/post-campaign", [Postcontroller::class, 'helpform'])->name('helpform')->middleware('auth');
Route::get("/view-campaigns", [Postcontroller::class, 'viewpost'])->name('viewpost');
Route::get("/view-post/{id}", [PostController::class, 'viewpostdetail'])->name('viewpostdetail')->middleware('auth');
// AJAX 
Route::post("/like", [PostController::class, 'like'])->name('like');
Route::get("/getlikes/{id}", [PostController::class, 'getlikes'])->name('getlike');



// routuing 
Route::get('/psetting', function () {
    return view('UserSettings');
});

Route::get("/paymentsuccess", [PostController::class, 'payment'])->name('payment');


// Search implementation
Route::get("/search", [Search::class, 'search'])->name('search');

Route::get('/about', function () {
    return view('about');
});

Route::post("/upload-image", [UserController::class, 'ImageControlleruploadImage'])->name('ImageControlleruploadImage')->middleware('auth');