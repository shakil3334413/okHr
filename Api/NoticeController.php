<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $url = "regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/";
    public function index()
    {
        return response()->json(Notice::get(),200);
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
        $request->validate([
            'title' => 'required|max:100',
            'noticeBody' => 'required|max:1000',
            'weblink' => $this->url,
            'file' => 'mimes:pdf,jpg,png,jpeg',
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
        if($notice->save()){
            return response()->json([
                'success' => true,
                'leave' => $notice
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice=Notice::findOrfail($id);
        if($notice){
            return response()->json([
                'success' =>true,
                'department'=>$notice
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
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
        $notice =Notice::findOrfail($id);
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


        $notice->title = $request->title;
        $notice->noticeBody = $request->noticeBody;
        $notice->weblink = $request->weblink;
        $notice->file = $file;
        $notice->noticeFor = $request->noticeFor;
        $notice->viewer = $viewer;
        $notice->status = $request->status;
        if($notice->save()){
            return response()->json([
                'success' => true,
                'leave' => $notice
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice=Notice::findOrfail($id);
        if($notice->delete()){
            return response()->json([
                'success' =>true,
                'department'=>$notice
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
}
