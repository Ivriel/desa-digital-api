<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialAssistance extends Model
{
    use UUID,HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'thumbnail',
        'category',
        'amount',
        'provider',
        'description',
        'is_available',
    ];

    public function socialAssistanceRecipients():HasMany
    {
        return $this->hasMany(SocialAssistanceRecipient::class);
    }

    public function headOfFamily():BelongsTo
    {
        return $this->belongsTo(HeadOfFamily::class);
    }
}
