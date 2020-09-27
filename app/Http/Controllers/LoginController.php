<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;

class LoginController extends Controller
{
    /**
     * set login type (login or register) cookie to show the wanted part when refresh the page.
     *
     * @return void
     */
    //************************************************************* */
    public function setLoginType(){
        if (Request()->ajax()){
            $displayType    = '';
            $pageType       = Request('pageType');
            if($pageType == 'login')
                $displayType = 'displayLeft';
            elseif($pageType == 'signUp')
                $displayType = 'displayRight';
            Cookie::queue('displayType', $displayType, 60);
        }
    }
    //************************************************************* */
}
