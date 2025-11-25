<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // 允许批量写入的字段
    protected $fillable = ['name', 'content'];
}