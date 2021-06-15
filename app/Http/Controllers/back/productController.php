<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Product;
use App\Http\Models\Category;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{

  public function index()
  {
    $products = Product::with('category')->get();
    return view('back.product.index', compact('products'));
  }


  public function create()
  {
    $categories = Category::get();
    return view('back.product.create', compact('categories'));
  }

  public function store(Request $request)
  {
    // Form Validate
    $request->validate([
      'category' => 'required',
      'title' => 'required',
      'price' => 'required',
      'image' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|required|max:2000',
      'image2' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|max:2000',
      'image3' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|max:2000',
      'image4' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|max:2000',
    ]);

    if ($request->file('image')) {
      $Product = new Product;

      $gambar = $request->file('image')->store('product', 'public');
      if ($request->file('image2')) {
        $gambar2 = $request->file('image2')->store('product', 'public');
        $Product->product_img2 = $gambar2;
      }
      if ($request->file('image3')) {
        $gambar3 = $request->file('image3')->store('product', 'public');
        $Product->product_img3 = $gambar3;
      }
      if ($request->file('image4')) {
        $gambar4 = $request->file('image4')->store('product', 'public');
        $Product->product_img4 = $gambar4;
      }

      // Eloquent ORM
      $Product->product_img = $gambar;
      $Product->product_code = $request->code;
      $Product->product_name = $request->title;
      $Product->product_price = $request->price;
      $Product->product_description = $request->description;
      $Product->categories_id = $request->category;
      $Product->product_trade_status = $request->trade_status;
      $Product->save();
    } else {
      return redirect()->route('back.product.create')->with('danger', 'Failed, image required!');
    }

    return redirect()->route('back.product.create')->with('success', 'product was created!');
  }

  public function edit($id)
  {
    $categories = Category::get();
    $product = Product::find($id);
    return view('back.product.edit', compact('product', 'categories'));
  }

  public function update($id, Request $request)
  {

    // Form Validate
    $request->validate([
      'category' => 'required',
      'title' => 'required',
      'price' => 'required',
      'image' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|max:2000',
      'image2' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|max:2000',
      'image3' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|max:2000',
      'image4' => 'mimes:jpg,png,jpeg,JPG,PNG,JPEG|max:2000',
    ]);

    // Eloquent ORM
    $Product = Product::findOrFail($id);
    if ($request->file('image')) {
      $gambar = $request->file('image')->store('product', 'public');
      if ($Product->product_img) {
        Storage::delete('public/' . $Product->product_img);
        $Product->product_img = $gambar;
      } else {
        $Product->product_img = $gambar;
      }
    }
    if ($request->file('image2')) {
      $gambar2 = $request->file('image2')->store('product', 'public');
      if ($Product->product_img2) {
        Storage::delete('public/' . $Product->product_img2);
        $Product->product_img2 = $gambar2;
      } else {
        $Product->product_img2 = $gambar2;
      }
    }
    if ($request->file('image3')) {
      $gambar3 = $request->file('image3')->store('product', 'public');
      if ($Product->product_img3) {
        Storage::delete('public/' . $Product->product_img3);
        $Product->product_img3 = $gambar3;
      } else {
        $Product->product_img3 = $gambar3;
      }
    }
    if ($request->file('image4')) {
      $gambar4 = $request->file('image4')->store('product', 'public');
      if ($Product->product_img4) {
        Storage::delete('public/' . $Product->product_img4);
        $Product->product_img4 = $gambar4;
      } else {
        $Product->product_img4 = $gambar4;
      }
    }
    $Product->product_code = $request->code;
    $Product->product_name = $request->title;
    $Product->product_price = $request->price;
    $Product->product_description = $request->description;
    $Product->categories_id = $request->category;
    $Product->product_trade_status = $request->trade_status;
    $Product->save();

    return redirect()->route('back.product.edit', $id)->with('success', 'product was update!');
  }

  public function destroy($id)
  {
    $product = Product::find($id);
    if ($product) {
      Storage::delete('public/' . $product->banner_image);
    }
    Product::destroy($product->id);

    $products = Product::with('category')->get();
    return view('back.product.index', compact('products'))->with('success', 'product was delete!');
  }
}
