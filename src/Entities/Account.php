<?php

namespace GarbinLuca\FattureInCloud\Entities;

use GarbinLuca\FattureInCloud\FattureInCloud;
use GarbinLuca\FattureInCloud\Requests\Account as Request;

class Account extends FattureInCloud {

    public function getInfo($data =  ["nome"]) {

        Request::info($data);
        return $this->auth->post("info/account", $data);

    }

}