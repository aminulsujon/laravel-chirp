<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    // Connecting users to Prattle
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Connecting chirps to playlists
    public function chirp()
    {
        return $this->belongsToMany(Chirp::class, 'playlist_chirps');
    }
    }
    
    
