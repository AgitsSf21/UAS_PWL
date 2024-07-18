<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use Illuminate\Http\Request;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Schema::create('ktps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
            table: 'users',
            indexName: 'ktps_user_id'
            )->onDelete('cascade');
            $table->string('nik', 16)->nullable();
            $table->timestamps();
            });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function show(Ktp $ktp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function edit(Ktp $ktp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ktp $ktp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ktp $ktp)
    {
        //
    }
}
