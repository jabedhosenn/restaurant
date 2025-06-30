<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food; // Assuming you have a Food model for food items
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function addFood()
    {
        // Logic to show the form for adding food items
        return view('admin.addfood');
    }

    // public function storeFood(Request $request)
    // {
    //     $food = new Food();
    //     $food->food_name = $request->food_name;
    //     $food->food_description = $request->food_description;
    //     $food->food_price = $request->food_price;
    //     $image=$request->food_image;

    //     if($image){
    //         $imageName = time().'.'.$image->getClientOriginalExtension();
    //         $food->food_image = $imageName;
    //     }
    //     $food->save();

    //     if ($image && $food->save()) {
    //         $request->food_image->move('food_img', $imageName); // Save the image
    //     }

    //     return redirect()->back()->with('success', 'Food item added successfully!');
    // }

    public function storeFood(Request $request)
    {
        $request->validate([
            'food_name' => 'required|string|max:255',
            'food_description' => 'required|string',
            'food_price' => 'required|numeric',
            'food_image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $food = new Food();
        $food->food_name = $request->food_name;
        $food->food_description = $request->food_description;
        $food->food_price = $request->food_price;

        if ($request->hasFile('food_image')) {
            $image = $request->file('food_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('food_images'), $imageName); // Save the image
            $food->food_image = $imageName; // Store filename in DB
        }

        $food->save();

        return redirect()->back()->with('success', 'Food item added successfully!');
    }

    public function viewFood()
    {
        // Logic to retrieve and display food items
        $foods = Food::all(); // Fetch all food items from the database
        return view('admin.viewfood', compact('foods'));
    }

    public function deleteFood($id)
    {
        // Logic to delete a food item
        $food = Food::findOrFail($id);
        $food->delete();

        // Optionally, delete the image file if it exists
        $imagePath = public_path('food_images/' . $food->food_image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        return redirect()->back()->with('success', 'Food item deleted successfully!');
    }

    public function editFood($id)
    {
        // Logic to show the form for editing a food item
        $food = Food::findOrFail($id);
        return view('admin.editfood', compact('food'));
    }

}
