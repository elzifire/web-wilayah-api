<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    /**
     * fillable
     * 
     * @var array
     */
    protected $table = 'agenda';
    protected $fillable = [
        'kegiatan', 'slug','tgl','tempat','ket'
    ];

    public static function tgl(): Attribute
    {
        return Attribute::make(
            get: fn ($value)=> \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        ); 
            
    }

    public static function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value)=> \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        ); 
            
    }

    public static function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value)=> \Carbon\Carbon::parse($value)->translatedFormat('l, d F Y'),
        );
    }
}