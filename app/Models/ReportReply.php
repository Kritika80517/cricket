<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportReply extends Model
{
    use HasFactory;
    protected $fillable = ['message', 'file'];

    public function reply_user()
    {
        return $this->hasOne(User::class, 'id', 'reply_by');
    }
}
