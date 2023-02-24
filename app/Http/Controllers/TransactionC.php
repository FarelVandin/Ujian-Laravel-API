<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionM;
use App\Http\Resources\TransactionR;

class TransactionC extends Controller
{
    public function index(){
        $transaction = TransactionM::all();
       // return response()->json($posts);
       return TransactionR::collection($transaction);
    }

    public function detail($id){
        $transaction = TransactionM::findOrFail($id);
        return new TransactionR($transaction);
    }
}