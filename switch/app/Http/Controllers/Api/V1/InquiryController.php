<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CoreService;

class InquiryController extends Controller
{
    //

    public function __construct( public CoreService $coreService )
    {
        
    }

    public function inquiry( )
    {
        $firstBank  = $this->coreService->coreInquiry( 1 );
        $secondBank = $this->coreService->coreInquiry( 2 );
        return 
        [
            'ballance' => $firstBank+$secondBank
        ];
    }
}
