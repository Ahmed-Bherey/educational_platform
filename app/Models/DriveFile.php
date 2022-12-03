<?php

namespace App\Models;

use App\Models\User;
use App\Models\Drive;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DriveFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'drive_id',
        'date',
        'img',
        'file',
        'video',
        'name',
        'notes',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function drives()
    {
        return $this->belongsTo(Drive::class, 'drive_id', 'id');
    }
}