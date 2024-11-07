<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = item::paginate(2);
        return view('items.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'quantity' => 'required|integer|min:1', 
            'price' => 'required|numeric|min:1'   
        ]);

        item::create(
            [
                'name' => $request->name,
                'description' => $request->description,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'user_id' => auth()->id(), 
            ]
        ); 

        return redirect('items')->with('message', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(item $item)
    {
        return view('items.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, item $item)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'quantity' => 'required|integer|min:1', 
            'price' => 'required|numeric|min:1'   
        ]);

        $item->update(
            [
                'name' => $request->name,
                'description' => $request->description,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'user_id' => auth()->id(), 
            ]
        ); 

        return redirect('items')->with('status', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(item $item)
    {
        $item->delete();
        return redirect('items')->with('delete_status', 'Item deleted successfully');
    }
}
