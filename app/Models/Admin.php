<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','email','last_name', 'avatar'];

    public function users()
    {
        return $this->hasMany(User::class, 'admin_id', 'id');
    }
}
