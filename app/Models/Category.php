<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Theme;

class Category extends Model
{
    use HasFactory;

    public function themes()
    {
        return $this->hasMany(Theme::class);
    }
}
