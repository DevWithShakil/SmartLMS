<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class TestController extends Controller
{
    public function taskOne()
    {
        $allStudents = DB::table('students')->get();
        $passedStudents = DB::table('students')->where('marks', '>', 50)->get();
        $averageMarks = DB::table('students')->avg('marks');

        return response()->json([
            'all_students' => $allStudents,
            'passed_students' => $passedStudents,
            'average_marks' => $averageMarks
        ]);
    }

    public function taskTwo()
    {
        $allProducts = Product::all();
        $inStockProducts = Product::where('stock', '>', 0)->get();
        $newProduct = Product::create([
            'name' => 'Test Product',
            'price' => 1200,
            'stock' => 50
        ]);

        Product::where('id', 1)->increment('price', 100);

        return response()->json([
            'message' => 'Task 2 executed successfully!',
            'in_stock_products' => $inStockProducts,
            'new_product' => $newProduct,
            'updated_product_1' => Product::find(1)
        ]);
    }
}
