<?php 
namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function create()
    {
        return view('transactions');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'type' => 'required|in:income,expense',
        ]);

        $user = Auth::user();

        $transaction = new Transaction([
            'amount' => $request->input('amount'),
            'type' => $request->input('type'),
        ]);
        $user->transactions()->save($transaction);
        
        return redirect()->back()->with('success', 'Transaksi berhasil disimpan dengan jumlah :'.$transaction->amount);
    }
}
