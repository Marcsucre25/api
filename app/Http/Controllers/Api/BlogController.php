<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Blog::all();
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
        $request->validate([
            'autor' => 'required|max:50',
            'titulo' => 'required|string|max:50',
            'contenido' => 'required | max:2000',
            'url' => 'required | max:100',
        ]);

        return Blog::create($request->all());
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
        return Blog::find($id);
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

        $request->validate([
            'autor' => 'required|max:50',
            'titulo' => 'required|string|max:50',
            'contenido' => 'required | max:2000',
            'url' => 'required | max:100',
        ]);

        $blog = Blog::find($id);

        $blog->update([
            'autor' => request('autor'),
            'titulo' => request('titulo'),
            'contenido' => request('contenido'),
            'url' => request('url')
        ]);
        return $blog;
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
        $blog = Blog::find($id);
        $blog->delete();
        return response()->json([
            'response' => 'El blog a sido eliminado'
        ]);
    }
}
