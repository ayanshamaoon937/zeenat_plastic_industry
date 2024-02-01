<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    use HasFactory;
    protected $table='settings';
    public $timestamps=false;
    protected $fillable=[
        'id',
        'email',
        'site_name',
        'logo',
        'phone_number',
        'about_image1',
        'about_image2',
        'about_image3',
        'ceo_image',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'youtube_link',
        'location',
        'timing',
    ];
}
