<?php
/**
 * Created by PhpStorm.
 * User: kubabialy
 * Date: 13.04.2018
 * Time: 17:34
 */

namespace App\Http\Controllers;


use Illuminate\View\View;

class ParserController
{
    public function index() : View
    {
        return \view('parser');
    }
}