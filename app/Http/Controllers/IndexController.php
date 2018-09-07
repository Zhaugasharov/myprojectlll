<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 02.09.2018
 * Time: 22:32
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function index(){
        $data = [];
        return view('pages/index', $data);
    }
}