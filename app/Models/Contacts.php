<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model

{
    use HasFactory;

    protected $table = 'user_contact';
    protected $guarded= ['id'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
