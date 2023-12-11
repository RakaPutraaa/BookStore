<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
class StoreViewController extends Controller
{
    public function show () {

        $datas = store::all();

        return view('storeView', compact('datas'));
    }
}
