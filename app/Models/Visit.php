<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $guarded = [];

    public function link()
    {
        return $this->belongsTo(Link::class);
    }



}
