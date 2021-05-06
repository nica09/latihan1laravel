<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\msteel;

class SteelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data               = [];
        $data['content']    = msteel::all();
        $videos = DB::select('select * from about_tbl');
        $brandlorem = DB::select('select * from brand_tbl');
        $awards = DB::select('select * from award_tbl');
        $funfacts = DB::select('select * from funfact_tbl');
        $service = DB::select('select * from service_product_tbl');
        $mouse = DB::select('select * from news_tbl');
        $teams = DB::select('select * from members_tbl');
        $berita = DB::select('select * from letter_tbl');
        $isiberita = DB::select('select * from letter2_tbl');
        $isijadwal = DB::select('select * from footer_tbl');
        $isinavlink = DB::select('select * from sosmed_tbl');
        $isiemail = DB::select('select * from setting_tbl');
        



        //dd($mouse);
        return view('moltcompany.webpage.home', $data,compact('videos','brandlorem','awards','funfacts','service','mouse','teams','berita','isiberita','isijadwal','isinavlink','isiemail'));

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
