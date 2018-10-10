<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:21
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = 'car_models';
    protected $fillable = ['model', 'brand_id'];
    public $timestamps = false;
}