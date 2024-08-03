<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 't_sales';
    protected $fillable = ['kode', 'tgl', 'cust_id', 'subtotal', 'diskon', 'ongkir', 'total_bayar'];
    protected $dates = ['tgl'];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'cust_id');
    }

    public function details()
    {
        return $this->hasMany(SalesDetail::class, 'sales_id');
    }
}
