<?php

namespace SrDev93\Validation;

use Illuminate\Support\Facades\Http;

class Validation {
    public function justDoIt() {
        $response = Http::get('https://30uweb.com/api/check');
        return $response;
    }
}