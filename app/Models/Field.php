<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\FilterCongregationScope;
use App\Models\Scopes\HideCongregationScope;

class Field extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope(new FilterCongregationScope);
        static::addGlobalScope(new HideCongregationScope);
    }

    public function config()
    {
        return $this->hasOne(
            Configuration::class, 
            'congregation_id',
            'congregation_id'
        );
    }

    public function group() {
        return $this->belongsTo(Group::class);
    }

    public function manager() {
        return $this->belongsTo(Manager::class);
    }
}
