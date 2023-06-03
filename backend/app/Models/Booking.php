<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'ticket_id', 'language_id', 'start_time', 'booking_date'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}