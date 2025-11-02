<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/homepage-login-user', function () {
    return view('user.homepage-login-user');
});

Route::get('admin/login-admin', function () {
    return view('admin.login-admin');
});

Route::get('user/login-user', function () {
    return view('user.login-user');
});

Route::get('user/signup-user', function () {
    return view('user.signup-user');
});

Route::get('user/signup-successful-user', function () {
    return view('user/signup-successful-user');
});

Route::get('admin/homepage-admin', function () {
    return view('admin.homepage-admin');
});

Route::get('admin/signup-admin', function () {
    return view('admin.signup-admin');
});

Route::get('admin/signup-successful-admin', function () {
    return view('admin.signup-successful-admin');
});

Route::get('admin/dashboard-admin', function () {
    return view('admin.dashboard-admin');
});

Route::get('admin/book-management-admin', function () {
    return view('admin.book-management-admin');
});

Route::get('admin/category-management-admin', function () {
    return view('admin.category-management-admin');
});

Route::get('admin/reader-management-admin', function () {
    return view('admin.reader-management-admin');
});

Route::get('admin/borrow-return-management-admin', function () {
    return view('admin.borrow-return-management-admin');
});

Route::get('admin/finemoney-management-admin', function () {
    return view('admin.finemoney-management-admin');
});

Route::get('user/tranglichsumuontra', function () {
    return view('user.tranglichmuontra');
});

Route::get('user/content-all-lsmn', function () {
    return view('user.content-all-lsmn');
});

Route::get('user/content-datra-lsmn', function () {
    return view('user.content-datra-lsmn');
});

Route::get('user/content-dangmuon-lsmn', function () {
    return view('user.content-dangmuon-lsmn');
});

Route::get('user/content-tratre-lsmn', function () {
    return view('user.content-tratre-lsmn');
});

Route::get('user/content-datcho', function () {
    return view('user.content-datcho');
});

Route::get('user/datchosach', function () {
    return view('user.datchosach');
});

Route::get('user/content-datchosach', function () {
    return view('user.content-datchosach');
});

Route::get('user/content-sachhot', function () {
    return view('user.content-sachhot');
});

Route::get('user/trangmuontra(sachdangmuon)', function () {
    return view('user.trangmuontra(sachdangmuon)');
});

Route::get('user/content-mtra-sachdangmuon', function () {
    return view('user.content-mtra-sachdangmuon');
});

Route::get('user/content-mtra-muonsachmoi', function () {
    return view('user.content-mtra-muonsachmoi');
});