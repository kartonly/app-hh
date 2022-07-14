<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ad extends Model
{
    protected $fillable = [
        'name', 'price', 'about',
    ];

    public function photos():HasMany{
        return $this->hasMany(Photo::class);
    }
}
