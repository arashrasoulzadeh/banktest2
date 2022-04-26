<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CoreService
{
    public function coreInquiry( $bankId )
    {
        $response = $this->call()->get( 'nginx:81/inquiry/' . $bankId )->body();
        return $this->getKey( $response, 'ballance' );
    }

    public function getKey( $jsonBody, $key )
    {
        return json_decode( $jsonBody )->$key;
    }

    public function call()
    {
        return Http::withHeaders( [] );
    }
}

