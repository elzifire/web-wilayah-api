<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
	protected $table = 'berita';
    protected $fillable = [
        'kategori_id', 'judul', 'slug', 'tgl', 'foto', 'isi', 'deskripsi', 'user_id'
    ];

    public function kategoriberita()
    {
        return $this->belongsTo(Kategoriberita::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    protected function foto(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/beritas/' . $value),
        );
    }

    public static function tgl(): Attribute
    {
        return Attribute::make(
			get: fn ($value) => \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        );
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