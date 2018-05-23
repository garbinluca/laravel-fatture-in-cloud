<?php

/**
 * Original library:
 * https://github.com/dangeroustry/FattureCloud/blob/master/src/Kiboko/FattureCloud/Request/Acquisti.php
 *
 */


namespace GarbinLuca\FattureInCloud\Requests;
use GarbinLuca\FattureInCloud\Requests\Common;

class Acquisti
{
    
    public static function lista($data = []) {

        $allowed = ['anno_competenza','tipo', 'data_inizio','data_fine','fornitore','id_fornitore','saldato'];

        $required = ['anno_competenza'];
    
        return Common::parseData($data,$allowed,$required);
    }

    public static function dettagli($data = []) {

        $allowed = ['id'];
        $required = ['id'];

        return Common::parseData($data,$allowed,$required);
    }
}