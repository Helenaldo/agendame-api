<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{
    use HasFactory;
    // protected $table = 'password_reset_tokens';
    const UPDATED_AT = null;
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
