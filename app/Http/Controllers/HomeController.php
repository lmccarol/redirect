<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employee_statuses = User::select('id','name','email','status','ext','cell')->orderBy('name')->get();

        $subscriber_names = Subscriber::select('name')->limit(6)->get();
        $subscriber_count = $subscriber_names->count();

        return view('home')->with(compact('employee_statuses'))->with(compact('subscriber_names'))->with(compact('subscriber_count'));
    }

    public function update(Request $request, $id)
    {
        $status = User::find($id);
        $status->status = $request->get('status');
        $status->save();

        return redirect('/');
    }
}
