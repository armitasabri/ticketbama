<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Cstatus;
use Illuminate\Http\Request;
use DataTables;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
           $this->middleware('ifadmin');
    }

  public function datatable(){
        
       $comments=Comment::all();
    //    dd($comments);
       return DataTables()->of($comments)
        ->addColumn('action',function($comments){

            $button='<button type="button" name="edit"
             id="'.$comments->id.'" class="text-center mr-2 edit btn btn-warning">Edit</button>';
             $button .='<button type="button" name="delete"
             id="'.$comments->id.'" class="text-center mr-2 delete btn btn-danger">Delete</button>';
             $button .='<button type="button" name="add"
             id="'.$comments->id.'" class="text-center mr-2 add btn btn-primary">Add</button>';
             return $button;
        }) 
        ->rawColumns(['action'])
        ->make(true);   
        
       return view('admin.comments.comments');
    }

    public function index()
   {   
       $comments=Comment::all();  
       
         return view('admin.comments.comments')->with('comments',$comments);

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
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
       $statuses=Cstatus::all();
    //    dd($statuses);
       return view('admin.comments.edit_commet',compact(['comment','statuses']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $comment=$request->get('comment');
       $comment=Comment::find($comment);
       $s=$request->get('stat');
       $ss=Cstatus::where('name',$s)->first();
       $comment->cstatuses_id=$ss->id;
       $comment->save();
       return redirect('admin/comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect('/admin/comments');
    }
}
