<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:43
 */

namespace App\Http\Controllers;


class AdvertController extends Controller
{
    public function save($id = null){

        return view('pages/advert/add');
    }
}