<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'timing', 'rules', 'min_people', 'max_people', 'famous_players', 'creator_id'];

    public static function indoor() {
        return self::where('type', 'indoor')->orderBy('created_at')->get();
    }

    public static function outdoor() {
        return self::where('type', 'outdoor')->orderBy('created_at')->get();
    }

    public static function recreation() {
        return self::where('type', 'recreation')->orderBy('created_at')->get();
    }
}
