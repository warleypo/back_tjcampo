<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Scopes\HideCongregationScope;
use Illuminate\Database\Eloquent\Builder;

class Congregation extends Model
{
    use HasFactory;

    protected static function booted()
    {
        // static::addGlobalScope(new HideCongregationScope);
    }

    public function config()
    {
        return $this->hasOne(Configuration::class);
    }

    /*
     * Scopes
     */
    public function scopeHideCongregationNotVisible($query)
    {
        return $query->whereHas('config', function (Builder $query) {
            $query->where('visibly', '1');
        });
    }

    public function scopeFilterByCongregation($query)
    {
        if (auth()->check()) {
            return $query->where('id', auth()->user()->congregation_id);
        }
        return $query;
    }
}
