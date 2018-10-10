<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:25
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    protected $table = 'payment_types';
    protected $fillable = ['type'];
    public $timestamps = false;
}