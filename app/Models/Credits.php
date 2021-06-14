<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credits extends Model
{
    use HasFactory;
    protected $table = "Credits";
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo('App\Models\Client','Client_Id');
    }
}
