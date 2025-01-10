<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Thiagoprz\CompositeKey\HasCompositeKey;

class Habit extends Model
{
    use HasCompositeKey;

    protected $primaryKey = ['user_id', 'types'];
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'types',
        'habit_distance',
        'carbon_footprint',
    ];

    protected $table = 'habits';

    /**
     * Relationship: A Habit has many Logs.
     */
    public function logs()
    {
        return $this->hasMany(Log::class, 'habit', 'types');
    }

    /**
     * Relationship: A Habit belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Explicit foreign key defined
    }
}
