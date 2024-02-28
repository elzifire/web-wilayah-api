<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    use HasFactory;
	protected $table = 'halaman';
    protected $fillable = [
        'kategori_id', 'judul', 'slug', 'tgl', 'foto', 'isi'
    ];

    public function kategori_id()
    {
        return $this->belongsTo(Kategorihalaman::class);
    }
    
   
    public static function tgl(): Attribute
    {
        return Attribute::make(
			get: fn ($value) => \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        );
    }
    protected function foto(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/halaman/' . $value),
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