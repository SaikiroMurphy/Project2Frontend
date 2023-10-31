<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Customer;
use App\Models\Field;
use App\Models\Order;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $fieldCount = Field::count();
        $adCount = Admin::count();
        $custCount = Customer::count();
        $timeCount = Time::count();
        $ordCount = Order::count();
        return view('dashboard.index', [
            'fieldCount' => $fieldCount,
            'custCount' => $custCount,
            'adCount' => $adCount,
            'ordCount' => $ordCount,
            'timeCount' => $timeCount
        ]);
    }

    public function index(){
        $admin = Admin::all();
        return view('admin.index',[
            'admins' => $admin
        ]);
    }

    public function customers() {
        $customers = Customer::paginate(10);
        return view('dashboard.customers', [
            'customers' => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $password = bcrypt($request->password);
        $array = [];
        $array = Arr::add($array, 'email', $request->email);
        $array = Arr::add($array, 'phonenumber', $request->phonenumber);
        $array = Arr::add($array, 'name', $request->name);
        $array = Arr::add($array, 'password', $password);
        Admin::create($array);
        return Redirect::route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin, \Illuminate\Http\Request $request)
    {
        //
        $del_ad = new Admin();
        $del_ad->id = $request->id;
        $del_ad->destroyAdmin();
        return Redirect::route('admin.index');
    }

    // Function login
    public function login() {
        return view('dashboard.login');
    }

    public function loginProcess(Request $request) {
        $account = $request->only(['email', 'password']);
//        $check = Auth::guard('admins')->attempt($account);
//        dd($check);
        if(Auth::guard('admins')->attempt($account)) {
            $admin = Auth::guard('admins')->user();
            Auth::guard('admins')->login($admin);
            session(['admins' => $admin]);
//            dd($account);
            return Redirect::route('dashboard.index');
        } else {
            return Redirect::back();
        }
    }

    public function logout() {
        Auth::guard('admins')->logout();
        session()->forget('admins');
        return Redirect::route('dashboard.login');
    }
}
