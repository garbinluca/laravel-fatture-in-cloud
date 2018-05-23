<?php

/**
 * Original library:
 * https://github.com/dangeroustry/FattureCloud/blob/master/src/Kiboko/FattureCloud/Request/Common.php
 *
 */

namespace GarbinLuca\FattureInCloud\Requests;

class Common
{
    public static function missingParams($params = null) {

        throw new \Exception('Parametri obbligatori mancanti' . (($params) ? ': ' . implode(', ', $params) : '.'));
    }

    public static function filterData($data,$allowed) {
        if(!$data || !$allowed) return [];
        return array_intersect_key($data, array_flip($allowed));
    }

    /**
     * Checks if multiple keys exist in an array
     * @return bool
     */
    public static function array_keys_exist(array $needles, array $haystack) {
        $missing = [];
        foreach ($needles as $needle)
        {
            if ( ! array_key_exists($needle, $haystack)) $missing[] = $needle;
        }

        return $missing;
    }

    public static function parseData($data, $allowed, $required)
    {
        $data = Common::filterData($data,$allowed);
        $missing = Common::array_keys_exist($required,$data);

        if(count($missing) > 0) Common::missingParams($missing);

        return $data;
    }

    public static function parseArrayData($array, $allowed, $required)
    {
        $lista = [];
        foreach ($array as $data) {
            $filtered    = Common::filterData( $data, $allowed );
            $missing = Common::array_keys_exist( $required, $data );

            if ( count( $missing ) == 0 ) $lista[] = $filtered;
        }

        return $lista;
    }
}