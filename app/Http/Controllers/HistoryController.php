<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Cookie;
use Auth;

class HistoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct(){
        $this->middleware('auth');
    }
    //********************************************************** */
   /**
     * Show the history page
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(){
        $modeType = Cookie::get('modeType');
        $histories = History::where('user_id', Auth::user()->id)->with('user')->latest()->get();
        return view('pages.history', compact('histories', 'modeType'));
    }
    //********************************************************** */
}
