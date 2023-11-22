<?php

namespace App\Enums;

use Dcat\Admin\DcatEnum;
use Dcat\Admin\Traits\DcatEnumTrait;

enum RouteSneat : string implements DcatEnum
{
    use DcatEnumTrait;

    case DASHBOARDS = 'dashbords';
    case DASHBOARD_ANALYTIC = 'dashbord.analytic';
}
