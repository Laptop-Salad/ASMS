<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    protected $guarded = ['id'];

    public function teachers(): HasMany {
        return $this->hasMany(Teacher::class);
    }
}
