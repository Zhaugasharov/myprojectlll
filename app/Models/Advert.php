<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:10
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $table = 'adverts';
    protected $fillable = ['status_id','title','description','price','payment_type_id','advert_type_id','search_type_id',
                           'city_id','fullname','gender','age','brand_id','model_id', 'year','animal_id','thing_id',
                           'keywords', 'user_id'];

}