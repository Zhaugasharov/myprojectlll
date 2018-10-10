<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:26
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserPhone extends Model
{
    protected $table = 'user_phones';
    protected $fillable = ['phone', 'user_id'];
    public $timestamps = false;
}