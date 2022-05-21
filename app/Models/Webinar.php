<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Webinar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function theme(): BelongsTo
    {
        return $this->belongsTo(WebinarTheme::class, 'webinar_theme_id');
    }
}
