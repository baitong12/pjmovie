<?php

namespace App\Http\Controllers;


use App\Models\movie;
use Illuminate\Http\Request;

class movieController extends Controller
{
    // ฟังก์ชันสำหรับดึงข้อมูลหนังสือทั้งหมด
    public function index()
    {
        // ดึงข้อมูลหนังสือทั้งหมดจากตาราง movies
        $movies = movie::all();
        // ส่งกลับข้อมูลในรูปแบบ JSON
        return response()->json($movies, 200);
    }

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

        // การเพิ่มข้อมูลลง Database
        $json = movie::create([
            'title' => $request->title,
            'director' => $request->director,
            'release_year' => $request->release_year,
            'genre' => $request->genre,
            'synopsis' => $request->synopsis,
        ]);

        return response()->json([
            'data' => $json,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $json = movie::find($id);

        return response()->json([
            'status code' => '200',
            'data' => $json
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //  การอัพเดท
        $json = movie::where('id', $id)->update([
            'title' => $request->title,
        ]);

        return response()->json([
            'data' => $json,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  การลบออกจาก database

        $json = movie::where('id', $id)->delete();

        return response()->json([
            'data' => $json,
        ]);
    }


    /**

Display movies by title.
* @param  string  $pad
* @return \Illuminate\Http\Response*/
public function pad(Request $request)
{
    $movies = movie::paginate(10); 

    return response()->json([
        'data' => $movies,
    ]);
}



}
