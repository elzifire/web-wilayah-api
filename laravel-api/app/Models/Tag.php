<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = [
        'name', 'slug'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public static function createdAt(): Attribute
    {
        return Attribute::make(
			get: fn ($value) => \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        );
    }

    public static function updatedAt(): Attribute
    {
        return Attribute::make(
			get: fn ($value) => \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        );
    }
}