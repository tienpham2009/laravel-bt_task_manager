<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
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
        return view('modules.customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
       return view('modules.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|Factory|View|Response
     */
    public function store(Request $request)
    {
        return view('modules.customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function show(Request $request )
    {
        $id = $request->id;
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View|Response
     */
    public function edit($id)
    {
        return \view('modules.customer.update');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
