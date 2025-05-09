<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CartController extends Controller
{
    public function index(): View
    {
        $userCart = Cart::where('user_id', Auth::id())->first();
        $cartItems = CartItem::where('cart_id', $userCart->id)->get();
        return view('user.cart',  compact('cartItems'));
    }

    public function addToCart(Request $request): RedirectResponse
    {
        $cart = Cart::where('user_id', Auth::id())->first();
        try {
            $cartItem = CartItem::firstOrCreate([
                'cart_id' => $cart->id,
                'category_id' => $request->category,
                'added_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        } catch (QueryException $exception) {
            if ($exception->getCode() == 23000) {
                return to_route('catalog.index');
            }
        }
        return to_route('catalog.index');
    }

    public function removeFromCart(Request $request): RedirectResponse
    {
        $userCart = Cart::where('user_id', Auth::id())->first();
        $item = CartItem::where('cart_id', $userCart->id)->where('category_id', $request->category)->delete();
//        dd($item);
        return to_route('cart.index');
    }
}
