<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Payment;
use App\Models\FileUpload;
use App\Models\User;
use DB;

class CartController extends Controller
{

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct(){
        $this->middleware('auth');
    }

    public function addToCart(Request $request, $fileId)
    {
        $file = FileUpload::findOrFail($fileId);

        // Check if the file is already in the cart
        $cartItem = Cart::where('user_id', Auth::id())
            ->where('file_id', $fileId)
            ->first();

        if ($cartItem) {
            // Update quantity if the product is already in the cart
            $cartItem->increment('file_quantity');
            $cartItem->file_quantity += $request->input('file_quantity', 1);
            $cartItem->save();
        } else {
            // Add new item to the cart
            Cart::create([
                'user_id' => Auth::id(),
                'creator_id' => $request->post('creator_id'),
                'file_id' => $fileId,
                'file_price' => $request->input('file_price', 0),
                'file_quantity' => $request->input('file_quantity', 1),
            ]);
        }

        // Get the updated cart count
        $cartCount = Auth::user()->cartItems->sum('file_quantity');

        return redirect()->route('cart')->with('success', 'File added to cart!');
        //return response()->json(['success' => true,'cartCount' => $cartCount,]);
    }

    public function viewCart()
    {
        $cartItems = Cart::with('file')->where('user_id', Auth::id())->get();

        // Calculate the total price
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item->file_quantity * $item->file_price;
        }

        // Pass cart items and total price to the view
        return view('cart', compact('cartItems', 'totalPrice'));
    }

    public function removeFromCart($cartItemId)
    {
        // Find the cart item
        $cartItem = Cart::where('user_id', Auth::id())
            ->where('id', $cartItemId)
            ->first();

        if ($cartItem) {
            // Delete the cart item
            $cartItem->delete();

            // Calculate the updated total price
            $cartItems = Cart::with('file')->where('user_id', Auth::id())->get();
            $totalPrice = $cartItems->sum(function ($item) {
                return $item->quantity * $item->price;
            });

            // Get the updated cart count
            $cartCount = $cartItems->sum('file_quantity');

            // Return JSON response for AJAX
            return response()->json([
                'success' => true,
                'totalPrice' => $totalPrice,
                'cartCount' => $cartCount,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Item not found in cart!',
        ], 404);
    }
}
