<?php

namespace App\Http\Controllers;

use App\Mappers\ChirpMapper;
use Illuminate\Http\Request;
use App\Models\Chirp;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private ChirpMapper $chirperMapper) {}

    public function index()
    {
        $chirps = Chirp::latest()->take(50)->get();
        $chirpsDto = $chirps->map(fn($chirps) => $this->chirperMapper->toDto($chirps));

        return view('home', ['chirps' => $chirpsDto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['message' => 'required|string|max:255|min:5'], [
            'message.required' => 'The message cannot be empty.',
            'message.min'      => 'The message must have at least 5 characters.',
            'message.max'      => 'The message cannot exceed 255 characters.',
        ]);

        Chirp::create([
            'message' => $validated['message'],

        ]);

        return redirect('/')->with('success', 'Chirp created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)


    {
        $chirp = Chirp::find($id);

        if (!$chirp) {
            abort(404);
        }

        return view('chirps.edit',['chirp'=>$chirp]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
