<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Memanggil halaman blog kategori food&drink
    public function index()
    {
        return view('blogs.blog-food');
    }

    //Memanggil halaman blog kategori art
    public function art()
    {
        return view('blogs.blog-art');
    }

    //Memanggil halaman blog kategori bazar
    public function bazar()
    {
        return view('blogs.blog-bazar');
    }

    //Memanggil halaman blog kategori beauty&health
    public function beauty()
    {
        return view('blogs.blog-beauty');
    }

    //Memanggil halaman blog kategori clothes
    public function clothes()
    {
        return view('blogs.blog-clothes');
    }

    //Memanggil halaman blog kategori electronic
    public function electronic()
    {
        return view('blogs.blog-electronic');
    }

    //Memanggil halaman blog kategori furniture
    public function furniture()
    {
        return view('blogs.blog-furniture');
    }

    //Memanggil halaman blog kategori webinar
    public function webinar()
    {
        return view('blogs.blog-webinar');
    }

    //Memanggil halaman detail blog (sementara)
    public function blogDetail()
    {
        return view('blogs.blog-details.blog-detail');
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
