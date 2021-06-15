<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
  protected $fillable = [
    'store_name',
    'store_email',
    'store_wa',
    'store_phone',
    'store_address',
    'store_about',
    'store_text_buy',
    'store_text_trade',
    'store_bank_account',
    'trade_status',
  ];
}
