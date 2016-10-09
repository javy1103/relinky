<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Listing;

class ListingsController extends Controller
{
    public function searchRent( Request $request ) {
        return Listing::search( $request->rent )->where( 'contract_type', 'rent' )->get();
    }

    public function searchBuy( Request $request ) {
        return Listing::search( $request->search )->where( 'contract_type', 'buy' )->get();
    }
}
