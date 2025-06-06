<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CarouselItemsRequest;
use App\Models\CarouselItems;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarouselItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Returns all the data from the Carousel Table
        return CarouselItems::all();
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarouselItemsRequest $request)
    {
        //Retrieve the validated input data...
        $validated = $request->validated();

        $carouselItem = CarouselItems::create($validated);
        

        //return the variable in order to show in the body
        return $carouselItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return CarouselItems::findOrFail($id);

    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validated();
        $carouselItem = CarouselItems::findOrFail($id);
        $carouselItem->update($validated);
        return $carouselItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         $carouselItem =  CarouselItems::findOrFail($id);
         $carouselItem ->delete();

         return $carouselItem;

        
    }
}
