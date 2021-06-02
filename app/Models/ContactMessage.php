<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    //protected $table = 'contact_messages';
    // Zo kan een model gelinkt worden aan een database tabel.
    // Automatisch linkt laravel een model aan een tabel dat de meervoud is van de model. Pizza (model) -> Pizzas (database)
}
