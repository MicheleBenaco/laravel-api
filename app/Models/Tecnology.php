<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Tecnology extends Model
{
    use HasFactory;
    protected $guarded = [];
        public static function createSlug($name){
        return Str::slug($name, '-');
    }
    public function projects() :BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
