<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function user() {
        return $this->belongsToMany(User::class);
    }

    protected $fillable = [
        'title', 'price', 'description', 'photos', 'equipment', 'specification', 'start_date', 'end_date', 'user_id', 'category_id'
    ];
}
