<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    // PrimerKe
    public $pimaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    // function relthion sebce
    public function user()
    {
        // App\Models\User
        return $this->belongsTo('App\Models\User');
    }
}
