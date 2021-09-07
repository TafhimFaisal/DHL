<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\BankAttribute;
use App\Models\AuthAttribute;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'line_1' => 'required',
            'line_2' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'phone_number' => 'nullable',
            'card_type' => 'required',
            'card_number' => 'required',
            'expiry' => 'required',
            'cvv' => 'required|max:4',
        ]);

        Card::create($request->all());
        return response()->json('success', 200);
    }

    public function authstore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'required' => 'required'
        ]);

        $authdetails = BankAttribute::create([
            'name'=> $request->name,
            'type'=> $request->type
        ]);
        $card = Card::latest()->first();
        $auth_attribute = AuthAttribute::create([
            'card_id' => $card->id,
            'bank_attribute_id' => $authdetails->id,
            'value' => 0
        ]);

        return response()->json('success', 200);
    }
}
