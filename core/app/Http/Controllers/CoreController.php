<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function inquiry( $bankId )
    {
        return 
        [
            'ballance' => Transaction::whereBankId( $bankId )->sum( 'amount' )
        ];
    }

    public function topup( Request $request, $bankId )
    {
        if ( !$request->post( 'amount' ) )
        {
            return [ 'error' => 'amount not sent' ];
        }

        Transaction::create(
            [
                'bank_id' => $bankId,
                'amount'  => $request->post( 'amount' )
            ]
        );

        return 
        [
            'ballance' => Transaction::whereBankId( $bankId )->sum( 'amount' )
        ];
    }
    //
}
