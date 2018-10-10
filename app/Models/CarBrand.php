<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:20
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    protected $table = 'car_brands';
    protected $fillable = ['brand'];
    public $timestamps = false;
}