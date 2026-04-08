<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileImage extends Model
{
    use UUID,HasFactory,SoftDeletes;

    protected $fillable = [
        'profile_id',
        'image',
    ];

    public function profile():BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
