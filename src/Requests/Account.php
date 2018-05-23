<?php

namespace GarbinLuca\FattureInCloud\Requests;
use GarbinLuca\FattureInCloud\Requests\Common;

class Account
{
    
    public static function info($data = []) {

        $allowed = ["nome", "durata_licenza", "tipo_licenza", "lista_valute", "lista_iva", "lista_paesi", "lista_template", "lista_conti", "lista_metodi_pagamento"];
        $required = [];

        return Common::parseData($data,$allowed,$required);
    }

}