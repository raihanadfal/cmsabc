<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('dashboard.posts.index');
        // return Post::where('user_id', auth()->user()->id)->get();
        // return view('dashboard.posts.index', [
        //     'post' => Post::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $post = new Post();
            $post->fill($request->all());
            $image = $request->file('certificate');
            if ($image) {
                $imageName = rand().'.'.$image->extension();
                $image->storeAs('public/'.Post::STORAGE_PATH, $imageName);
                $post->image = $imageName;
            }
            DB::commit();

            return redirect(route('dashboard.posts.index'))->with('success', 'Berhasil!');
        } catch (Exception $err) {
            DB::rollBack();
            return redirect(route('dashboard.posts.index'))->with('error', 'Gagal!');
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
        $model = Post::with(['categories'])->findOrFail($id);

        return view('dashboard.posts.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Post::findOrFail($id);

        return view('dashboard.posts.edit', compact('model'));
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
        DB::beginTransaction();
        try {
            $model = Post::findOrFail($id);
            $model->fill($request->all());
            $model->save();
            DB::commit();

            return redirect()->route('dashboard.posts.index')->with(['success' => 'Data Berhasil Diubah']);
        } catch (Exception $err) {
            DB::rollBack();
            return redirect()->route('dashboard.posts.index')->with(['error' => 'Data Gagal Diubah']);
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
        $model = Post::findOrFail($id);

        DB::beginTransaction();
        try {
            if ($model->image) Storage::delete('public/'. Post::STORAGE_PATH. $model->iamge);
            $model->delete();

            DB::commit();
        } catch (Exception $err) {
            DB::rollBack();
            return redirect(route('dashboard.posts.index'))->with('error', 'Gagal!');
        }

        return redirect()->route('dashboard.posts.index')->with(['success' => 'Hapus Data Berhasil']);
    }
}
