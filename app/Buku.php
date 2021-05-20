<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['nama_buku', 'jenis_buku_id', 'stok'];

    public function jenis(){
        return $this->belongsTo(JenisBuku::class);
    }
}
