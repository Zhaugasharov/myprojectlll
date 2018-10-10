<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:16
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AdvertStatus extends Model
{
    protected $table = 'advert_statuses';
    protected $fillable = ['status'];
    public $timestamps = false;
}