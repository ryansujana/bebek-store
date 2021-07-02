<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telur extends Model
{
	use HasFactory;

	public function stok()
	{
		return $this->belongsTo(Stok::class, 'stok_id', 'id');
	}

	public function pemesanan_details()
	{
		return $this->hasMany(PemesananDetail::class, 'telur_id', 'id');
	}
}
