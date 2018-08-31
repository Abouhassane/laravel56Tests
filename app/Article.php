<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
	protected $dates = ['published_at'];

    protected $fillable = [
    	'title',
    	'body',
    	'excerpt',
    	'published_at',
        'user_id'
    ];

    public function scopePublished($query){
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query){
    	$query->where('published_at', '>=', Carbon::now());
    }

    public function setPublishedAtAttribute($date){
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    /*public function getPublishedAtAttribute($date){
    	return $date->format('d/m/Y');
    }*/

    public function user(){
        return $this->belongsTo('App\User');
    }
}
