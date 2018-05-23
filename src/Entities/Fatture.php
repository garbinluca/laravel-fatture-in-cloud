<?php

namespace GarbinLuca\FattureInCloud\Entities;

use GarbinLuca\FattureInCloud\Entities\Documenti;
use GarbinLuca\FattureInCloud\Requests\Fatture as Request;

class Fatture extends Documenti {

    protected $docType = 'fatture';

}