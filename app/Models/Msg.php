<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
    use HasFactory;
     protected $filleable = [
'sender_name',
'sender_email',
'receiver',
'subject',
'message',
'sent',
'folder',
     ];
}
