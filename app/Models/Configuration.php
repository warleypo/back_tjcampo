<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\FilterCongregationScope;
use App\Models\Scopes\HideCongregationScope;

class Configuration extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope(new FilterCongregationScope);
    }
}
