<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\requests\validatorComplainRequest;
use App\Complain;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class complainController extends Controller
{
    public function index()
    {
        $Complain = Complain::all();
        return view('complaint.indexcomplain', [
            'items' => $Complain
        ]);
        return view('Complaint.indexcomplain');
    }
    public function create()
    {
        return view('complaint.createcomplain'); 
    }

    public function store(Request $request)
    {
        $Complain = Complain::create(
            [
                'name' => $request->name,
                'complain_text' => $request->complain_text,
            ]
        );
        $Complain->save();
        return redirect( route('complaint.indexcomplain'));
    }
}
