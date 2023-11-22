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
    case COMPONENTS_PROGRESS = 'components.progress';
    case COMPONENTS_TIP_AND_POPOVER = 'components.tip_and_popover';
    case COMPONENTS_TOASTR = 'components.toastr';
    case COMPONENTS_TABS = 'components.tabs';
    case COMPONENTS_MODAL = 'components.modal';
    case COMPONENTS_CARDS = 'components.cards';
    case COMPONENTS_MARKDOWN = 'components.markdown';
    case COMPONENTS_CHARTS = 'components.charts';

    case GRIDS_CUSTOM = 'grids.custom';
    case GRIDS_GRID = 'grids.grid';

    case FORMS_EDITORS_MARKDOWN = 'formds.editors.markdown';
    case FORMS_EDITORS_SUMMERCODE = 'formds.editors.summercode';
    case FORMS_EDITORS_TINYMCE = 'formds.editors.tinymce';

    case FORMS_WHEN = 'fords.when';

    case BASIC = 'basic';
    case CLIENTS = 'clients';
}
