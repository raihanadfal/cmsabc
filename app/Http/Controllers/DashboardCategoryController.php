<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $models = Category::all();

        return view('dashboard.categories.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
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
            $post = new Category();
            $post->fill($request->all());

            DB::commit();

            return redirect(route('categories.index'))->with('success', 'Berhasil!');
        } catch (Exception $err) {
            DB::rollBack();
            return redirect(route('categories.index'))->with('error', 'Gagal!');
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
        $model = Category::findOrFail($id);

        return view('dashboard.categories.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Category::findOrFail($id);

        return view('dashboard.categories.edit', compact('model'));
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
            $model = Category::findOrFail($id);
            $model->fill($request->all());
            $model->save();
            DB::commit();

            return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Diubah']);
        } catch (Exception $err) {
            DB::rollBack();
            return redirect()->route('categories.index')->with(['error' => 'Data Gagal Diubah']);
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
        $model = Category::findOrFail($id);

        DB::beginTransaction();
        try {
            $model->delete();

            DB::commit();
        } catch (Exception $err) {
            DB::rollBack();
            return redirect(route('categories.index'))->with('error', 'Gagal!');
        }

        return redirect()->route('categories.index')->with(['success' => 'Hapus Data Berhasil']);
    }
}
