<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Display;

class DisplaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('displays.index', [
            'displays' => Display::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('displays/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate(['comment_body' =>'required']);
        $display = new Display();

        $display->comment_body = strip_tags($request->input('comment_body'));

        $display->save();
        return redirect()->route('displays.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($display)
    {
        return view('displays.edit', [ 
            'display' => Display::findOrFail($display)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($display)
    {
        return view('displays.edit', [ 
            'display' => Display::findOrFail($display)
        ]);
        return redirect()->route('displays.index', $display);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $display)
    {
        
        $request ->validate(['comment_body' =>'required']);
        $record = Display::findOrFail($display);

        $record->comment_body = strip_tags($request->input('comment_body'));

        $record->save();
        return redirect()->route('displays.index', $display);
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
