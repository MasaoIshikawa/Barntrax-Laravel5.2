<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Ledger extends Model {

	protected $table = 'ledger';

	public function category()
	{
		return $this->belongsTo('Category');
	}
}