<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    protected $fillable=[
        'title','body'
    ];
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
