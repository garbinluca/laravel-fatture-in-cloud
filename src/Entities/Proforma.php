<?php

namespace GarbinLuca\FattureInCloud\Entities;

use GarbinLuca\FattureInCloud\Entities\Documenti;
use GarbinLuca\FattureInCloud\Requests\Fatture as Request;

class Proforma extends Documenti {

    protected $docType = 'proforma';

}