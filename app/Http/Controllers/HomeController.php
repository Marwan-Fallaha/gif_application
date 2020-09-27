<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use Auth;
use Response;
use Cookie;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(){ 
        $modeType = Cookie::get('modeType');
        return view('pages.home', compact('modeType'));
    }
    //********************************************************** */
   /**
     * Get GIF search results as json response.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function getSearchResults(Request $request){
        if ($request->ajax()) {
            $q      = str_replace(' ', '+', $request->q);
            $url    = "http://api.giphy.com/v1/gifs/search?q='$q'&offset=$request->offset&api_key=ZlxXfTTo5TZ8LXTyRJBZ8Ips98oAeKgK&limit=16";
            $data   = json_decode(file_get_contents($url));
            //if API does not support pagination I can use this
            // $data = collect($data->data)->forPage($numberOfPage,$numberOfItems);
            $html   = view('pages.searchResults', ['data' => $data->data, 'total' => $data->pagination->total_count])->render();
            if($request->offset == 0)
                self::saveSearchHistory($request->q);
            return Response::json([
                'html'   => $html
            ]); 
        }
    }
    //********************************************************** */
    /**
     * save user search history.
     *
     * @return void
    */
    private function saveSearchHistory($q){
        $history = new History();
        $history->user_id = Auth::user()->id;
        $history->q = $q;
        $history->save();
    }
    //********************************************************** */
    /**
     * Set dark mode cookie.
     *
     * @return void
    */
    public function setDarkMode(){
        if (Request()->ajax()){
            $isDarkMode = Request('isDarkMode');
            if($isDarkMode == 'true')
                $modeType = 'dark-mode';
            else
                $modeType = '';
            Cookie::queue('modeType', $modeType, 720);
        }
    }
    //********************************************************** */
}
