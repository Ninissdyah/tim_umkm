<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Memanggil halaman store category food&drink
    public function index()
    {
        return view('stores.store-food');

    }
    
    //Memanggil halaman store category art
    public function art()
    {
        return view('stores.store-art');
    }

    //Memanggil halaman store category beauty&health
    public function beauty()
    {
        return view('stores.store-beauty&health');
    }

    //Memanggil halaman store category clothes
    public function clothes()
    {
        return view('stores.store-clothes');
    }

    //Memanggil halaman store category electronic
    public function electronic()
    {
        return view('stores.store-electronic');
    }

    //Memanggil halaman store category furniture
    public function furniture()
    {
        return view('stores.store-furniture');
    }

    //Memanggil halaman store category others
    public function other()
    {
        return view('stores.store-other');
    }


    //Memanggil halaman detail store (sementara)
    public function storeDetail()
    {
        return view('stores.store-details.store-detail');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
