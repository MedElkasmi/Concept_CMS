<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section\Description;
use Illuminate\Support\Str;

class DescController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.section');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //


        $data = Description::find(1);

        $data = $request->validate([
            
            'title_text' => 'required|unique:descriptions,title_text',
            'title_button' => 'required|unique:descriptions,title_button',
            'paragraph' => 'required',
            'background_image' => 'required|unique:descriptions,background_image',

        ]);

        if($request->file('background_image')) {

            $file = $request->file('background_image');
            $filename = str::random(12).$file->getClientOriginalName();
            $file->move(public_path('upload/Section/Descriptions'),$filename);

            $data->title_text = $request->title_text;
            $data->title_button = $request->title_button;
            $data->paragraph = $request->paragraph;
            $data->background_image = $filename;

            $data->save();


            $notification = array(
                'message' => 'Description Section has been Updated',
                'alert-type' => 'success'
            );
    
            return redirect()->route('admin.section')->with($notification);
    
         }
    }

}
