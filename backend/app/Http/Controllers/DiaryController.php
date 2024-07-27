<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return Diary::latest()->paginate();

    }


    public function store(Request $request,Diary $diary)
    {
        return $diary->create($request->all());

    }




    public function update(Request $request, Diary $diary)
    {
        $diary->update($request->all());
       return $diary;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diary $diary)
    {
        $diary->delete();

        return response()->noContent();
    }
}
