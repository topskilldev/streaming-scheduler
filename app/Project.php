<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    //
    public function playlists() {
        return $this->belongsToMany('App\Playlist');
    }

    public function logo() {
        return $this->belongsTo('App\Logo');
    }
}
