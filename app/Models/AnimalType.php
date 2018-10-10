<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:19
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    protected $table = 'animal_types';
    protected $fillable = ['type'];
    public $timestamps = false;
}