<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Message;

class HomeController extends Controller
{
    public function index() {
      $data = [
        'title' => 'Guest Book on Laravel 5',
        'pagetitle' => "Guset Book",
        'messages' => Message::latest()->paginate(1),
        'count' => Message::count()
      ];
      return view('pages.messages.index', $data);
    }

    public function edit($id) {
      $data = [
        'title' => 'Edit: Guest Book on Laravel 5',
        'pagetitle' => 'Edit: Guset Book'
      ];
      return view('pages.messages.edit');
    }
}
