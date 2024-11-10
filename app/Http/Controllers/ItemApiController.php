<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Get the authenticated user's ID
    $userId = Auth::id();

    // If there's no authenticated user, you might want to return an error
    if (!$userId) {
        return response()->json(['error' => 'Unauthenticated'], 401);
    }

    // Fetch items for the specific user
    $items = Item::where('user_id', $userId)->get();

    return response()->json($items);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'quantity'=> 'required',
            'user_id' => auth()->id(), 
        ]);

        $item = Item::create($validatedData);

        return response()->json($item, 201); //resource created
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Item::find($id);

        if($item){
            return response()->json($item);
        }else{
            return response()->json(['message' => 'Item not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);

        if($item){
            $validatedData = $request->validate([
                'name'=> 'required',
                'description'=> 'required',
                'price'=> 'required',
                'quantity'=> 'required',
            ]);

            $item->update($validatedData);
            return response()->json($item, 200); //resource updated
        }else{
            return response()->json(['message' => 'Item not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::find($id);

        if($item){
            $item->delete();
            return response()->json(['message' => 'Item deleted'], 200); //resource deleted
        }else{
            return response()->json(['message' => 'Item not found'], 404);
        }
    }
}
