<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['tag_id', 'subject', 'content' ,'photo', 'admin_id'];

    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function favourite(){
        return $this->hasMany(Favourite::class);
    }
}
