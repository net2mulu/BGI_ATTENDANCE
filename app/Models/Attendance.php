<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    use HasFactory;
public function user(){

    return $this->belongsTo(User::class, 'user_id');
}

public function getDateonlyAttribute() {
    return $this->created_at->format('y-m-d');
}

public function getTimeonlyAttribute() {
    return $this->created_at->format('H:i:s');
}
}
