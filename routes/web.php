<?php

use Illuminate\Http\Request;
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

// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {

    Route::get('index', function () {
        $customers = [
            [
                "name" => "	Nguyễn Văn A",
                "phone" => "01234567890",
                "email" => "email.test@mail.com	"
            ],
            ["name" => "	Nguyễn Văn B	",
                "phone" => "01234567890",
                "email" => "email.test@mail.com		"
            ],
            [
                "name" => "	Nguyễn Văn A",
                "phone" => "01234567890",
                "email" => "email.test@mail.com	"
            ],
        ];
        return view('modules.customer.index' , compact('customers'));
    })->name("customer.index");

    Route::get('create', function () {
        // Hiển thị Form tạo khách hàng
        return view('modules.customer.create');
    })->name("customer.create");

    Route::post('store', function () {
        return view('customer.index');
    })->name('customer.store');

    Route::get('{id}/{name}/{phone}/{email}/show', function (Request $request ) {
        $id = $request['id'];
        $name = $request['name'];
        $phone = $request['phone'];
        $email = $request['email'];
        $data = [
            "id"=> $id,
            "name"=> $name,
            "phone"=> $phone,
            "email"=> $email,
        ];
        return view('modules.customer.show' , compact('data'));
    })->name('customer.show');

    Route::get('{id}/edit', function ($id) {
        var_dump($id);die();
    });

    Route::patch('{id}/update', function ($id) {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
        var_dump($id);die();
    });

    Route::delete('{id}', function ($id) {
        // Xóa thông tin dữ liệu khách hàng
        var_dump($id);die();
    });
});

