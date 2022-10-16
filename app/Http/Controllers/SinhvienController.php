<?php

namespace App\Http\Controllers;
use App\Models\Sinhvien;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sinhvien = Sinhvien::paginate(30);
        return view('index',compact('sinhvien'))->with('i',(request()->input('page', 1) -1)*30);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
        
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
        Sinhvien::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Them sinh vien thanh cong!');
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
    public function edit(Sinhvien $sinhvien)
    {
        //
        return view('edit',compact('sinhvien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sinhvien $sinhvien)
    {
        //
        $sinhvien->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Cap nhat sinh vien thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sinhvien $sinhvien)
    {
        //
        $sinhvien->delete();
        return redirect()->route('sinhvien.index')->with('thongbao','Xoa sinh vien thanh cong');

    }
}
