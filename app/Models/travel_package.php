<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travel_package extends Model
{
    protected $table = "travel_packages";
    protected $primarykey = "id";
    protected $fillable = [
    'title','slug','location','about','featured_event','language'.'foods','departure_date','duration','type','price',
];
public function galleries(){
    return $this->hasMany(galleri::class, 'travel_package_id', 'id');
}
public function transaksi(){
    return $this->hasMany(transaksi::class, 'travel_package_id', 'id');
}
}
