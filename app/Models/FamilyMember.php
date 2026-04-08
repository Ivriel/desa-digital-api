<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamilyMember extends Model
{
    use HasFactory,SoftDeletes,UUID;
    protected $fillable = [
        'head_of_family_id',
        'user_id',
        'profile_picture',
        'identity_number',
        'gender',
        'date_of_birth',
        'phone_number',
        'occupation',
        'marital_status',
        'relation'
    ];

    public function headOfFamily():BelongsTo
    {
        return $this->belongsTo(HeadOfFamily::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
