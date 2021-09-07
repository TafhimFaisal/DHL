<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

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

        // $cards = new Card;
        Card::create($request->all());
        return response()->json('success', 200);
    }
}
