<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //テーブル名
    protected $table = "messages";

    //可変項目
    protected $fillable =
    [
        'content',
        'image',

        
    ];


}
