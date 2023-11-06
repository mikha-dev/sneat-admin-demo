<?php

namespace App;

use Dcat\Admin\Models\Administrator;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Administrator implements Auditable
{
    use \OwenIt\Auditing\Auditable;
}
