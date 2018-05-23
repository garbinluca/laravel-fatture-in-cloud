<?php

namespace GarbinLuca\FattureInCloud;

use GarbinLuca\FattureInCloud\Auth;

class FattureInCloud {

    private $auth;

    public function __construct()
    {

        $this->auth = new Auth(env('LARAVEL_API_UID'), env('LARAVEL_API_KEY'));

    }

    public function getInfo() {

        $data = $this->auth->post('clienti/lista');
        return $data;

    }

}