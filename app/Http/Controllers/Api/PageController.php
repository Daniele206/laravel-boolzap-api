<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $chats = Chat::with('contacts', 'messages')->get();

        return response()->json($chats);
    }
}
