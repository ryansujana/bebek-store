<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
	use HasFactory;

	public function telurs()
	{
		return $this->hasMany(Telur::class, 'stok_id', 'id');
	}
}
