<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Phonebook extends Model
{
    use HasFactory;
    protected $table = 'phonebook';
    protected $fillable = ['last_name', 'first_name', 'phone_type', 'number'];
}
