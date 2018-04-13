<?php
/**
 * Created by PhpStorm.
 * User: kubabialy
 * Date: 13.04.2018
 * Time: 17:01
 */

namespace App\Http\Controllers;


use Illuminate\View\View;

class WebController extends Controller
{
    public function index() : View
    {
        return \view('main');
    }
}