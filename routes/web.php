<?php

use Illuminate\Support\Facades\Route;


Route::get('/','frontend\FrontendController@index')->name('frontend');
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');


/*app id 384337159226038 
secret key ee57b41f71341ecdbd34a653df32c2c6*/

Route::get('/about', 'frontend\FrontendController@about')->name('about');
Route::get('/category/{slug}', 'frontend\FrontendController@category')->name('frontend.category');

Route::get('/tag/{slug}', 'frontend\FrontendController@tag')->name('frontend.tag');

Route::get('/contact', 'frontend\FrontendController@contact')->name('contact');
Route::get('/post/{slug}', 'frontend\FrontendController@post')->name('single.post');
Route::get('/all/category', 'frontend\FrontendController@allcategory')->name('all.category');
Route::get('/user/login', 'frontend\FrontendController@login_view')->name('login.view');

Route::get('/user/registration', 'frontend\FrontendController@registration_view')->name('registration.view');

Route::get('/user/profile/{id}', 'frontend\FrontendController@user_profile')->name('user.profile');

Route::post('/user/registration/store', 'frontend\LoginRegistrationController@registration_store')->name('registration.store');

Route::post('/contact/store', 'frontend\ContactController@store')->name('contact.store');



//Myacount
Route::group(['middleware' => ['auth', 'user']],function(){
    
Route::prefix('myaccount')->group(function(){
    
    Route::get('/dashboard', 'frontend\DashboardController@index')->name('dashboard.view');
    
    Route::get('write/post', 'frontend\DashboardController@write_post')->name('write.post');
    
    Route::get('post/list', 'frontend\DashboardController@post_list')->name('post.list');
    
    Route::get('profile', 'frontend\DashboardController@profile_view')->name('profile.view');
    
    Route::post('post/store', 'frontend\PostController@store')->name('post.store');
    
    Route::get('post/show/{slug}', 'frontend\PostController@show')->name('post.show');
    
    Route::get('post/edit/{slug}', 'frontend\PostController@edit')->name('post.edit');
    
    Route::post('post/update/{id}', 'frontend\PostController@update')->name('post.update');
    
    Route::post('user/update/{id}','frontend\DashboardController@profileUpdate')->name('profile.update');
    
    Route::post('user/password/','frontend\DashboardController@passwordUpdate')->name('profile.password');


    
});
    
});


    Route::post('commnet/store', 'frontend\CommentController@store')->name('comment.store');
    Route::post('subscribe/store', 'frontend\SubscribeController@store')->name('subscribe.store');


Auth::routes();


//////////////////Backend Routes

Route::group(['middleware' => ['auth', 'admin']], function(){
Route::get('/home', 'HomeController@index')->name('home');
    
//Users
Route::prefix('users')->group(function(){
    Route::get('/view', 'backend\UsersController@view')->name('users.view');
    Route::get('/add', 'backend\UsersController@add')->name('users.add');
    Route::post('/stor', 'backend\UsersController@stor')->name('users.stor');
    Route::get('/edit/{id}', 'backend\UsersController@edit')->name('users.edit');
    Route::post('/update/{id}', 'backend\UsersController@update')->name('users.update');
    Route::get('/delete/{id}', 'backend\UsersController@delete')->name('users.delete');
});
//Profiles
Route::prefix('profiles')->group(function(){
    Route::get('/view', 'backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update', 'backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/change', 'backend\ProfileController@passwordEdit')->name('profiles.edit.password');
    Route::post('/password/update', 'backend\ProfileController@passwordUpdate')->name('profiles.update.password');
});
    
//Categories
Route::prefix('categories')->group(function(){
    Route::get('/view', 'backend\CategoryController@view')->name('categories.view');
    Route::get('/add', 'backend\CategoryController@add')->name('categories.add');
    Route::post('/store', 'backend\CategoryController@store')->name('categories.store');
    Route::get('/edit/{id}', 'backend\CategoryController@edit')->name('categories.edit');
    Route::post('/update/{id}', 'backend\CategoryController@update')->name('categories.update');
    Route::get('/delete/{id}', 'backend\CategoryController@delete')->name('categories.delete');
});
    
//Categories
Route::prefix('tags')->group(function(){
    Route::get('/view', 'backend\TagController@view')->name('tags.view');
    Route::get('/add', 'backend\TagController@add')->name('tags.add');
    Route::post('/store', 'backend\TagController@store')->name('tags.store');
    Route::get('/edit/{id}', 'backend\TagController@edit')->name('tags.edit');
    Route::post('/update/{id}', 'backend\TagController@update')->name('tags.update');
    Route::get('/delete/{id}', 'backend\TagController@delete')->name('tags.delete');
});

//Admin Posts
Route::prefix('admin/posts')->group(function(){
    Route::get('/view', 'backend\PostController@view')->name('posts.view');
    Route::get('/add', 'backend\PostController@add')->name('posts.add');
    Route::post('/store', 'backend\PostController@store')->name('posts.store');
    Route::get('/edit/{id}', 'backend\PostController@edit')->name('posts.edit');
    Route::post('/update/{id}', 'backend\PostController@update')->name('posts.update');
    Route::get('/delete/{id}', 'backend\PostController@delete')->name('posts.delete');
    Route::get('/show/{id}', 'backend\PostController@show')->name('posts.show');

});
    
//User Posts
Route::prefix('user/posts')->group(function(){
    Route::get('/view', 'backend\PostController@userPost_view')->name('user.posts.view');
    
    Route::get('/delete/{id}', 'backend\PostController@userPost_delete')->name('user.posts.delete');
    
    Route::get('/show/{id}', 'backend\PostController@userPostshow')->name('user.posts.show');
    
    Route::get('/approved/{id}', 'backend\PostController@postApproved')->name('posts.approved');
    
    Route::get('/regected/{id}', 'backend\PostController@postRegected')->name('posts.regected');
    
    Route::get('/delete/{id}', 'backend\PostController@userPost_delete')->name('user.posts.delete');

});
  
    

//Settings
Route::prefix('settings')->group(function(){
    Route::get('/view', 'frontend\SettingController@index')->name('settings.index');
    
    Route::post('/update/', 'frontend\SettingController@update')->name('settings.update');
});
    


});
