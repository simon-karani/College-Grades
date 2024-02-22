<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table = 'parents';

    protected $fillable = [
        'user_id',
        'phone',
        'current_address',
        'Coordinator',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function children()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }
    public function students()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }
}
