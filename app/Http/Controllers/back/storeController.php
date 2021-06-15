<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Store;

class storeController extends Controller
{

  public function index()
  {
    $store   =   Store::get()->first();
    return view('back.store.index', compact('store'));
  }

  public function update($id, Request $request)
  {
    // Eloquent ORM
    $storeObj = Store::findOrFail($id);
    $storeObj->store_name = $request->title;
    $storeObj->store_email = $request->email;
    $storeObj->store_wa = $request->whatsapp;
    $storeObj->store_phone = $request->phone;
    $storeObj->store_address = $request->address;
    $storeObj->store_about = $request->about;
    $storeObj->store_text_buy = $request->textBuy;
    $storeObj->store_text_trade = $request->textTrade;
    $storeObj->store_bank_account = $request->rekening;
    $storeObj->store_bank_account = $request->rekening;
    // $storeObj->trade_status = $request->trade_status;
    $storeObj->save();
    
    return redirect('/panel/store')->with('success', 'Store was updated!');
  }
}
