<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    
    protected $fillable = [
        'code', 'name', 'description'   
    ];

    protected $appends = ['urls'];

    public function getUrlsAttribute()
    {
        return array_filter(  explode("|", $this->url) ,'strlen'); // $this->attributes['admin'] == 'yes'; //some logic to return numbers
    }
}
