<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id_member','tgl_order','batas_waktu','tgl_bayar','status','dibayar','id_user'];

    public function detail()
    {
        return $this->hasMany(DetailTransaksi::class,'id_transaksi','id');
    }
}
