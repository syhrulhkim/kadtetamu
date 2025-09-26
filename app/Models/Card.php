<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'template_id',
        'title',
        'event_type',
        'event_date',
        'venue',
        'event_description',
        'custom_data',
        'status',
        'is_public',
        'slug',
        'total_amount',
        'payment_status',
        'published_at',
    ];

    protected $casts = [
        'custom_data' => 'array',
        'event_date' => 'date',
        'published_at' => 'datetime',
        'is_public' => 'boolean',
        'total_amount' => 'decimal:2',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function template()
    {
        return $this->belongsTo(CardTemplate::class, 'template_id');
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    // Mutators
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value) . '-' . Str::random(8);
    }

    // Accessors
    public function getPublicUrlAttribute()
    {
        return route('cards.public', $this->slug);
    }

    public function getTotalGuestsAttribute()
    {
        return $this->guests()->count();
    }

    public function getRsvpStatsAttribute()
    {
        $guests = $this->guests;
        return [
            'total' => $guests->count(),
            'attending' => $guests->where('rsvp_status', 'attending')->count(),
            'not_attending' => $guests->where('rsvp_status', 'not_attending')->count(),
            'pending' => $guests->where('rsvp_status', 'pending')->count(),
        ];
    }
}
