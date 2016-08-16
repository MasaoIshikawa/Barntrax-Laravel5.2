<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ArchiveRequest;
use App\Models\Ledger;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminLedgerController extends Controller
{
    public function index(Request $request)
    {
    	$ledger = Ledger::all();
        return response()->json(['ledger' => $ledger]);
    }
}