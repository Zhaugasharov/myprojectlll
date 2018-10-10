<?php
/**
 * Created by PhpStorm.
 * User: Berik
 * Date: 10.10.2018
 * Time: 20:13
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AdvertComment extends Model
{
    protected $table = 'advert_comments';
    protected $fillable = ['comment', 'comment_answer_id', 'advert_id', 'user_id'];
}