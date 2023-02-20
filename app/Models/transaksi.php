<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksis";
    protected $primarykey = "id";
    protected $fillable = [

        'id', 'travel_packages_id','user_id','addtional_visa','total_transaksi','status_transaksi',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
    public function travel_package(){
        return $this->belongsTo(Travel_Package::class, 'travel_packages_id', 'id');
    }
}
