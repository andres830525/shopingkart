<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
    $products = Product::all();
    return view('products',compact('products'));
   }


   public function products1(){
    $products = Product::where("category","1")->paginate(10);
    return view('products',compact('products'));
   }

   public function products2(){
    $products = Product::where("category","2")->paginate(10);
    return view('products',compact('products'));
   }

   public function products3(){
    $products = Product::where("category","3")->paginate(10);
    return view('products',compact('products'));
   }
   public function products4(){
    $products = Product::where("category","4")->paginate(10);
    return view('products',compact('products'));
   }

   public function detail($id){
    $product = Product::find($id);
    return view('detail')->with('product',$product);
   }

   public function cart(){

    return view('cart');
   }

   public function pagar(){
    session()->flash('alert-success', 'Gracias por su compra en unos minutos nos pondremos en contacto con usted para coordinar y Confirmar su pago!');

    return view('cart');
   }


   public function deleteProduct($id){

 //logica para agregar producto
 $product = Product::find($id);
 $cart = session()->get('cart');


if(isset($cart[$id])&&$cart[$id]['quantity'] <=0){


    session()->forget($cart[$id]);
    session()->flash('alert-success', 'Se borro el producto!');
    return redirect()->back();

}

//si el carro no esta vacio y el producto existe se resto la cantidad
if(isset($cart[$id])){

    $cart[$id]['quantity']--;
    session()->put('cart',$cart);
    session()->flash('alert-success','Se borro el producto!');
    return redirect()->back();

}



}

public function emptycart(){



    session()->flush();
    session()->flash('alert-success', 'Todos los productos han sido eliminados!');

  return redirect()->back();
}



public function addToCart($id){
   //logica para agregar producto
    $product = Product::find($id);
    $cart = session()->get('cart');
   //si el carro esta vacio entonces se llena con el producto

if(!$cart){

    $cart = [
      $id => [

        "name"=>$product->name,
        "quantity"=>1,
        "price"=>$product->price,
        "photo"=>$product->photo


      ]


    ];
    session()->put('cart',$cart);
    session()->flash('alert-succes','Product added to the cart Successfully');

    return redirect()->back();
}
//si el carro no esta vacio y el producto existe se incrementa la cantidad
if(isset($cart[$id])){

    $cart[$id]['quantity']++;
    session()->put('cart',$cart);
    session()->flash('alert-succes','Product added to the cart Successfully');
    return redirect()->back();

}

//si el articulo no existe en el carro se agrega con la cantidad 1

$cart[$id] = [

    "name"=>$product->name,
    "quantity"=>1,
    "price"=>$product->price,
    "photo"=>$product->photo


];

  session()->put('cart',$cart);
  session()->flash('alert-succes','Product added to the cart Successfully');
  return redirect()->back();
   }
    //
}
