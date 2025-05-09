<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $order = Order::create([
            'user_id' => Auth::id(),
            'order_date' => now(),
        ])->id;
        foreach ($request->category as $category) {
            OrderItem::create([
                'order_id' => $order,
                'category_id' => $category,
            ]);
        }
        $userCart = Cart::where('user_id', Auth::id())->first()->id;
        $userCartItems = CartItem::where('cart_id', $userCart)->get();
        foreach ($userCartItems as $userCartItem) {
            $userCartItem->delete();
        }
        return to_route('user.home')->with('success', 'Заказ оформлен.');
    }
}
