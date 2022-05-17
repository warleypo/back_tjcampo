<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\FilterCongregationScope;

class Group extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope(new FilterCongregationScope);
    }
}
