<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'name',
        'email',
        'phone',
        'address',
        'guest_type',
        'plus_ones',
        'invitation_status',
        'rsvp_status',
        'rsvp_message',
        'dietary_requirements',
        'invitation_sent_at',
        'rsvp_received_at',
        'invitation_token',
    ];

    protected $casts = [
        'invitation_sent_at' => 'datetime',
        'rsvp_received_at' => 'datetime',
        'plus_ones' => 'integer',
    ];

    // Relationships
    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    // Scopes
    public function scopeAttending($query)
    {
        return $query->where('rsvp_status', 'attending');
    }

    public function scopeNotAttending($query)
    {
        return $query->where('rsvp_status', 'not_attending');
    }

    public function scopePending($query)
    {
        return $query->where('rsvp_status', 'pending');
    }

    public function scopeInvited($query)
    {
        return $query->where('invitation_status', 'sent');
    }

    public function scopeByType($query, $type)
    {
        return $query->where('guest_type', $type);
    }

    // Mutators
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($guest) {
            if (empty($guest->invitation_token)) {
                $guest->invitation_token = Str::random(32);
            }
        });
    }

    // Accessors
    public function getInvitationUrlAttribute()
    {
        return route('invitations.view', $this->invitation_token);
    }

    public function getRsvpUrlAttribute()
    {
        return route('invitations.rsvp', $this->invitation_token);
    }

    public function getTotalAttendeesAttribute()
    {
        return 1 + $this->plus_ones;
    }

    // Helper methods
    public function markInvitationSent()
    {
        $this->update([
            'invitation_status' => 'sent',
            'invitation_sent_at' => now(),
        ]);
    }

    public function recordRsvp($status, $message = null)
    {
        $this->update([
            'rsvp_status' => $status,
            'rsvp_message' => $message,
            'rsvp_received_at' => now(),
        ]);
    }
}
