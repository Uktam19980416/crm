<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    public function services(){
       return $this->belongsTo(Service::class);
    }

    public function stages(){
       return $this->belongsTo(Stage::class);
    }
}
