<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Post;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Post::find($request->input('product_id'));
    
        if (!$product) {
            return response()->json(['message' => 'Товар не знайдено'], 404);
        }
    
        $cart = Session::get('cart', []);
    
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'title' => $product->title,
                'price' => $product->price,
                'unit' => $product->unit,
                'quantity' => 1,
                'image_path' => $product->image_path
            ];
        }
    
        Session::put('cart', $cart);
    
        // Розрахунок кількості унікальних товарів
        $uniqueItemCount = count($cart);
    
        // Загальна кількість одиниць товарів
        $totalQuantity = array_sum(array_column($cart, 'quantity'));
    
        // Загальна сума
        $totalPrice = number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 2);
    
        return response()->json([
            'message' => 'Товар додано до кошика',
            'item_count' => $uniqueItemCount,
            'total_quantity' => $totalQuantity,
            'total_price' => $totalPrice
        ]);
    }
    
    

    public function remove($id)
    {
        $cart = Session::get('cart', []);
    
        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
    
            // Розрахунок кількості унікальних товарів
            $uniqueItemCount = count($cart);
            
            // Загальна сума
            $totalPrice = number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 2);
    
            return response()->json([
                'success' => true,
                'unique_item_count' => $uniqueItemCount,
                'total_price' => $totalPrice
            ]);
        } else {
            return response()->json(['success' => false], 400);
        }
    }
    
    

    public function update(Request $request, $id)
{
    $cart = Session::get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity'] = max(1, $request->input('quantity')); // Ensure quantity is at least 1
        Session::put('cart', $cart);

        // Розрахунок кількості унікальних товарів
        $uniqueItemCount = count($cart);

        // Загальна сума
        $totalPrice = number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 2);

        return response()->json([
            'success' => true,
            'unique_item_count' => $uniqueItemCount,
            'total_price' => $totalPrice
        ]);
    } else {
        return response()->json(['success' => false], 400);
    }
}



    
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('cart.index', compact('cart'));
    }
}