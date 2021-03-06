<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['body'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')->select(['name', 'id']);
    }
}