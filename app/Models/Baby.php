<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    protected $table = 'babies';
    protected $fillable = [
        'nama_bayi', 
        'nama_ibu', 
        'nama_ayah', 
        'alamat_lengkap', 
        'tanggal_lahir', 
        'tanggal_mengisi', 
        'nilai_total', 
        'status'];
}