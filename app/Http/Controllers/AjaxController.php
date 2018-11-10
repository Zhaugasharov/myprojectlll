<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:45
 */
namespace App\Http\Controllers;

use App\Models\AdvertType;
use App\Models\Country;
use App\Models\PaymentType;
use App\Models\SearchType;
use App\Models\ThingType;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function getStaticData(){
        $data = [];
        $data['countries'] = Country::all();
        $data['advert_types'] = AdvertType::all();
        $data['search_types'] = SearchType::all();
        $data['thing_types'] = ThingType::all();
        $data['payment_types'] = PaymentType::all();

        return json_encode($data);
    }

    public function getUser(){
        $data['user'] = Auth::user();

        return json_encode($data);
    }

}