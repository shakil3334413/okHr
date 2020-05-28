<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
class NoticeController extends Controller
{
    public $url = "regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('notice.index',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'noticeBody' => 'required|max:1000',
            'weblink' => $this->url,
            'file' => 'mimes:pdf.jpg,png,jpeg',
            'noticeFor' => 'required',
            'status' => 'required'
        ]);
        if($request->file){
            $file = request('file')->store('noticeFile');
        }
        if($request->noticeFor != '1'){
            $viewer = json_encode($request->viewer);
        }
        $viewer = "";
        
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->noticeBody = $request->noticeBody;
        $notice->weblink = $request->weblink;
        $notice->file = $file;
        $notice->noticeFor = $request->noticeFor;
        $notice->viewer = $viewer;
        $notice->status = $request->status;
        $notice->save();

        return redirect()->route('notice.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Notice::findOrFail($id);
        return view('notice.show',compact('notice'));
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
        $notice = Notice::findOrFail($id);
        $notice->delete();
        return redirect()->route('notice.index');
    }
}
