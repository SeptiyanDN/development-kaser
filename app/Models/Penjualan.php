<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    public function member()
    {
        return $this->hasOne(Member::class, 'id_member', 'id_member');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
