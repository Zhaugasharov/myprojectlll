<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:15
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AdvertPhoto extends Model
{
    protected $table = 'advert_photos';
    protected $fillable = ['photo', 'advert_id'];
    public $timestamps = false;
}