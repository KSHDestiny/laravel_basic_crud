<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Read
    public function read() {
        $datas = Customer::all();
        return view('read',compact('datas'));
    }

    // Create Page
    public function createPage(){
        return view('create');
    }

    // Create
    public function create(Request $request){
        $data = [
            'name' => $request->userName,
            'phone' => $request->userPhone,
            'email' => $request->userEmail,
            'created_at' => Carbon::now()
        ];
        Customer::create($data);
        return redirect()->route('read');
    }

    // update Page
    public function updatePage($id){
        $data = Customer::where('id',$id)->first();
        return view('update',compact('data'));
    }

    // update
    public function update(Request $request, $id){
        $data = [
            'name' => $request->userName,
            'phone' => $request->userPhone,
            'email' => $request->userEmail,
            'updated_at' => Carbon::now()
        ];
        Customer::where('id',$id)->update($data);
        return redirect()->route('read');
    }

    // delete
    public function delete($id){
        Customer::where('id',$id)->delete();
        return back();
    }
}
