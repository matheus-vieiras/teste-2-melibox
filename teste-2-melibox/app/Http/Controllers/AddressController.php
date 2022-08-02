<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index()
    {

        return Address::all();
    }

    public function create(Request $request)
    {

        return Address::create($request->all());
    }

    public function show($id)
    {

        return Address::find($id);
    }

    public function update($id, Request $request)
    {
        // carregar meu registro atual e colocar os valores novos
        // apos isso, salvar no banco de dados e retonar o obj.

        $address = Address::find($id);

        $address->fill($request->all());

        $address->save();

        return $address;
    }

    public function destroy($id)
    {

        $address = Address::find($id);

        if ($address) {

            $address->delete();
        }

        return $address;
    }
}
