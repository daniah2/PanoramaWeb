<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




 



Route::controller(CustomerController::class)->group(function ()  {
    Route::get("customer",'index')->name('customer');
    Route::get('customer/edit/{id}','edit')->name('customer.edit');

    Route::post('customer/store','store')->name('customer.store');
    Route::post("customer/update/{id}",'update')->name('customer.update');
    Route::get("customer/destroy/{id}",'destroy')->name('customer.destroy');
});



Route::controller(ServiceController::class)->group(function ()  {
    Route::get("service",'index')->name('service');
    Route::get('service/edit/{id}','edit')->name('service.edit');

    Route::post('service/store','store')->name('service.store');
    Route::post("service/update/{id}",'update')->name('service.update');
    Route::get("service/destroy/{id}",'destroy')->name('service.destroy');
});

 Route::controller(ContactController::class)->group(function ()  {
    Route::get("contact",'index')->name('contact');
    Route::post('contact/store','store')->name('contact.store');
 
});

 ////////////////////////////////////////

Route::get('/',function ()  {
    $show=Service::get();
    $show2=Service::get();
    return view('index',['show1'=>$show,'show2'=>$show2]);
})->name('/');

Route::get('contacts',function ()  {
    $show=Service::get();
    return view('contact',['show1'=>$show]);
})->name('contacts');

////////////////////////////////////////

Route::get('services',function ()  {
    $show=Service::get();
    return view('services',['show'=>$show,'show1'=>$show]);
})->name('services');

////////////////////////////////////////

Route::get('services/show/{id}',function ($id)  {
    $show=Service::findOrFail($id);
    $show1=Service::get();
    return view('web',['show'=>$show,'show1'=>$show1]);
})->name('services.show');

////////////////////////////////////////

Route::get('blog',function ()  {
    $show=Customer::get();
    $show1=Service::get();

    return view('blog',['show'=>$show,'show1'=>$show1]);
})->name('blog');

////////////////////////////////////////

 