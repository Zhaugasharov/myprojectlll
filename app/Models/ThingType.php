<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ThingType extends Model
{
    protected $table = 'thing_types';
    protected $fillable = ['type'];
    public $timestamps = false;
}