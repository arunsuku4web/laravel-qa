<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable =['title','body'];
    public function setTitleAttribute($value)
    {
        $this->attributes['title']=$value;
        $this->attributes['slug']=str_slug($value);

    }
}
