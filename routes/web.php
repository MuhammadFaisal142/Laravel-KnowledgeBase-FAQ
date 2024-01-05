<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SheetsController;
use App\Http\Controllers\Admin\PopulationController;
Route::get('locale/{locale}', function ($locale) {
    if (array_key_exists($locale, config('panel.available_languages'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@test')->name('home');
Route::get('/housing', 'HomeController@housing')->name('housing');
Route::get('/testpic', 'HomeController@testpic')->name('testpic');

Route::get('categories/check_slug', 'CategoryController@check_slug')->name('categories.check_slug');
Route::get('categories/{slug}/{category}', 'CategoryController@show')->name('categories.show');
Route::get('tags/check_slug', 'TagController@check_slug')->name('tags.check_slug');
Route::get('tags/{slug}/{tag}', 'TagController@show')->name('tags.show');
Route::get('articles/check_slug', 'ArticleController@check_slug')->name('articles.check_slug');
Route::get('articles/{slug}/{article}', 'ArticleController@show')->name('articles.show');
Route::get('articles', 'ArticleController@index')->name('articles.index');
Route::get('faq', 'FaqController@index')->name('faq.index');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    //
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    // // Categories
    // Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    // Route::resource('categories', 'CategoriesController');

    // // Tags
    // Route::delete('tags/destroy', 'TagsController@massDestroy')->name('tags.massDestroy');
    // Route::resource('tags', 'TagsController');

    // // Articles
    // Route::delete('articles/destroy', 'ArticlesController@massDestroy')->name('articles.massDestroy');
    // Route::resource('articles', 'ArticlesController');

    // // Faq Categories
    // Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    // Route::resource('faq-categories', 'FaqCategoryController');

    // // Faq Questions
    // Route::delete('faq-questions/destroy', 'FaqQuestionController@massDestroy')->name('faq-questions.massDestroy');
    // Route::resource('faq-questions', 'FaqQuestionController');
});
// Sheets Data
Route::get('/admin/sheets/population/district', 'Admin\SheetsController@population_District')->name('admin.sheets.population_District');
Route::get('/admin/sheets/population/foreign', 'Admin\SheetsController@foreign_Population')->name('admin.sheets.foreign_Population');
Route::get('/admin/sheets/population/density', 'Admin\SheetsController@population_Density')->name('admin.sheets.population_Density');
Route::get('/admin/sheets/population/growth', 'Admin\SheetsController@population_Growth')->name('admin.sheets.population_Growth');
Route::get('/admin/sheets/population/LargeGroupsAge', 'Admin\SheetsController@population_Large_Groups_Age')->name('admin.sheets.population_Large_Groups_Age');
