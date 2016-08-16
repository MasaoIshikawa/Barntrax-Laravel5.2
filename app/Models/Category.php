<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ledger;

class Category extends Model {
	
	public function ledgers() {
		return $this->hasMany('Ledger');
	}
}