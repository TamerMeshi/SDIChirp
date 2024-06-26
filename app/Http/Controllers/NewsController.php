<?php

// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;
use App\Http\Services\NewsService;
use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  News::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $data = new News();
//        $data->text=$request->input('text');
//        $data->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(News $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $message)
    {
        //
    }
}

