<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name'];
    // Define relationships and other methods for the Student model
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // Define relationships and other methods for the Track model
    public function track()
    {
        return $this->belongsTo(Track::class);
    }
}
