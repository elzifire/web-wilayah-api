<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    /**fillable
     * 
     * @var array
     * 
     */
    protected $table = 'profil';
    protected $fillable = [
        'nama_opd',
        'slug',
        'foto_opd',
        'nama_kepala',
        'foto_kepala',
        'alamat',
        'telepon',
        'website',
        'email',
        'fb',
        'embed_fb',
        'ig',
        'embed_ig',
        'twitter',
        'embed_twitter',
        'youtube',
        'peta'
    ];

    /**IMAGE
     * 
     * @return attribute
     */
    protected function foto(): Attribute
    {
        return attribute::make(
            get: fn ($value) => asset('/strorage/foto/' ,$value)  
        );
    }

    public static function createdAt():Attribute
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
