<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ArchiveRequest;
use App\Models\Category;
use App\Models\Ledger;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminCategoriesController extends Controller
{
    public function index(Request $request)
    {
    	$categories = Category::all();
        return response()->json(['categories' => $categories]);
    }
}