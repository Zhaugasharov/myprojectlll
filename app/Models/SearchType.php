<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:30
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SearchType extends Model
{
    protected $table = 'search_types';
    protected $fillable = ['type'];
    public $timestamps = false;
}