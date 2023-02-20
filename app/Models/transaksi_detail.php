<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_detail extends Model
{
    protected $table = "transaksi_details";
    protected $primarykey = "id";
    protected $fillable = [

        'id', 'transaksi_id', 'username','nationality','is_visa','doe_passport',
    ];

    public function travel_package()
    {
        return $this->hasMany(travel_package::class, 'id', 'id');
    }
    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'id', 'id');
    }
}
