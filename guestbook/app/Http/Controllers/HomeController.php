<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Message;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    public function index() {
      $data = Message::paginate(5);
      $count = Message::count();
      return view('pages.messages.index', ['messages' => $data, 'count' => $count]);
    }

    public function add(Request $request) {
      $input = Input::all();
      Message::create($input);
      return back();
    }

    public function edit($id) {
      $data = [
        'title' => 'Edit: Guest Book on Laravel 5',
        'pagetitle' => 'Edit: Guset Book'
      ];
      return view('pages.messages.edit');
    }
}
