<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beers = Beer::all();
        return view('admin.beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $beer = new Beer();
        return view("admin.beers.create", compact("beer"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $beer = Beer::create($data);
        return redirect()->route("admin.beers.index", [$beer->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $beer = Beer::findOrFail($id);
        return view('admin.beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $beer = Beer::findOrFail($id);
        return view("admin.beers.edit", compact("beer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $beer = Beer::findOrFail($id);

        $beer->update($data);

        return redirect()->route("admin.beers.show", [$beer->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();
        return redirect()->route("admin.beers.index");
    }

    // Metodo per mettere le birre dal censtino
    public function deletedIndex()
    {
        $beers = Beer::onlyTrashed()->get();
        return view('admin.beers.deleted-index', compact('beers'));
    }

    // Metodo per ripristinare le birre dal censtino
    public function restore(string $id)
    {
        $beer = Beer::onlyTrashed()->findOrFail($id);
        $beer->restore();

        return redirect()->route("admin.beers.index");
    }

    // Metodo per eliminare definitivamente le birre dal censtino
    public function permanentDelete(string $id)
    {
        $beer = Beer::onlyTrashed()->findOrFail($id);
        $beer->forceDelete();

        return redirect()->route('admin.beers.index');
    }
}
