<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



//MOCKED LIST 
$chirps = [
    [
        'autor'   => 'Maria Silva',
        'message' => 'Bom dia a todos! Que dia lindo para codificar.',
        'time'    => '2026-08-26 08:15:00',
    ],
    [
        'autor'   => 'João Pereira',
        'message' => 'Alguém já experimentou o novo Laravel 12?',
        'time'    => '2026-08-26 09:02:31',
    ],
    [
        'autor'   => 'Ana Costa',
        'message' => 'PHP continua sendo uma das linguagens mais usadas no backend.',
        'time'    => '2026-08-26 10:47:12',
    ],
    [
        'autor'   => 'Carlos Mendes',
        'message' => 'Acabei de terminar meu primeiro projeto com Chirper 🐦',
        'time'    => '2026-08-26 11:30:05',
    ],
    [
        'autor'   => 'Beatriz Santos',
        'message' => 'Café + código = produtividade máxima ☕',
        'time'    => '2026-08-26 13:12:47',
    ],
];



        return View('home',['chirps'=> $chirps]);


        //
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
        //
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


