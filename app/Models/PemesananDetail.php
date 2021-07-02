<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananDetail extends Model
{
	use HasFactory;

	public function pemesanan()
	{
		return $this->belongsTo(Pemesanan::class, 'pemesanan_id', 'id');
	}

	public function telur()
	{
		return $this->belongsTo(Telur::class, 'telur_id', 'id');
	}
}
