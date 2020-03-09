<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use File;
use Illuminate\Http\Request;

class WebstoreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price);

        return redirect('/home');
    }

    public function removeFromCart($id)
    {
        Cart::remove($id);
        return redirect('/home');
    }

    public function clearCart()
    {
        Cart::destroy();

        return redirect('/home');
    }

    public function createProduct()
    {
        return view('addProduct');
    }

    public function addProduct(Request $request)
    {
        $product = new Product;

        $product->name = $request->productName;
        $product->price = $request->productPrice;

        $product->save();

        $imageName = $product->id . '.png';
        $request->productImageFile->move(public_path('/img'), $imageName);

        return redirect($request->headers->get('referer'));
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('editProduct')->with('product', $product);
    }

    public function updateProduct(Request $request)
    {
        if($request->productImageFile) {
            $imageName = $request->productId . '.png';
            File::delete(public_path('/img/' . $imageName));
            $request->productImageFile->move(public_path('/img'), $imageName);
        }

        $product = Product::find($request->productId);

        $product->name = $request->productName;
        $product->price = $request->productPrice;

        $product->save();

        return redirect($request->headers->get('referer'));
    }

    public function deleteProduct(Request $request, $id)
    {
        Product::destroy($id);

        return redirect($request->headers->get('referer'));
    }




    public function checkout()
    {
        $cartItems = Cart::content();

        return view('cartCheckout')->with('cartItems', $cartItems);
    }


    public function paidSuccessfully()
    {
        Cart::destroy();
        return view('paidSuccessfully');
    }
}
