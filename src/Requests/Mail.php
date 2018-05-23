<?php

/**
 * Original library:
 * https://github.com/dangeroustry/FattureCloud/blob/master/src/Kiboko/FattureCloud/Request/Mail.php
 *
 */

namespace GarbinLuca\FattureInCloud\Requests;
use GarbinLuca\FattureInCloud\Requests\Common;

class Mail
{
    
    public static function lista($data = []) {

        $allowed = ['filtro','destinatario', 'mittente','stato','data_inizio','data_fine','pagina'];

        $required = [];
    
        return Common::parseData($data,$allowed,$required);
    }
}