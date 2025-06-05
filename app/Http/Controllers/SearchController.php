<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumen;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $results = Dokumen::where('judul', 'like', '%' . $query . '%')
                          ->orWhere('deskripsi', 'like', '%' . $query . '%')
                          ->get();

        return view('search.results', compact('results', 'query'));
    }
}