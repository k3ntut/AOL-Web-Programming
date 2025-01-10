<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $fillable = [
        'user_id',       
        'log_date',      
        'distance_perlog', 
        'habit',         
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function habit()
    {
        return $this->belongsTo(Habit::class, 'habit', 'types');
    }
}
