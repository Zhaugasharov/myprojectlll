<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:40
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $fillable = ['state', 'country_id'];
    public $timestamps = false;
}