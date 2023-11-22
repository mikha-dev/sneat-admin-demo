<?php

namespace App\Enums;

use Dcat\Admin\DcatEnum;
use Dcat\Admin\Traits\DcatEnumTrait;

enum RouteSneat : string implements DcatEnum
{
    use DcatEnumTrait;

    case DASHBOARDS = 'dashbords';
    case DASHBOARD_ANALYTIC = 'dashbord.analytic';

    case COMPONENTS = 'components';
    case COMPONENTS_ACCORDION = 'components.accordion';
    case COMPONENTS_ALERTS = 'components.alerts';
    case COMPONENTS_CHECK_AND_RADIO = 'components.check_and_radio';
    case COMPONENTS_DROPDOWN = 'components.dropdown';
}
