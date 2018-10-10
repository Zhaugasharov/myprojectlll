<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:18
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AdvertType extends Model
{
    protected $table = 'advert_types';
    protected $fillable = ['type'];
    public $timestamps = false;
}