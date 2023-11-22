<?php

return [
    // Dashboards
    [
        'id'        => 'dashboards',
        'title'     => __('sneat.dashboards'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => '',
        'parent_id' => 0,
    ],
    [
        'id'        => 'analytic',
        'title'     => __('sneat.analytics'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::DASHBOARD_ANALYTIC()),
        'parent_id' => 'dashboards',
    ],

    // Components
    [
        'id'        => 'components',
        'title'     => __('sneat.components'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => '',
        'parent_id' => 0,
    ],
    [
        'id'        => 'accordion',
        'title'     => __('sneat.accordion'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_ACCORDION()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'alerts',
        'title'     => __('sneat.alerts'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_ALERTS()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'check-and-radio',
        'title'     => __('sneat.check_and_radio'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_CHECK_AND_RADIO()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'dropdown',
        'title'     => __('sneat.dropdown'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_DROPDOWN()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'progress',
        'title'     => __('sneat.progress'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_PROGRESS()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'tip-and-popover',
        'title'     => __('sneat.tip_and_popover'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_TIP_AND_POPOVER()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'toastr',
        'title'     => __('sneat.toastr'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_TOASTR()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'tabs',
        'title'     => __('sneat.tabs'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_TABS()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'modal',
        'title'     => __('sneat.modals'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_MODAL()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'cards',
        'title'     => __('sneat.cards'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_CARDS()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'markdown',
        'title'     => __('sneat.markdown'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_MARKDOWN()),
        'parent_id' => 'components',
    ],
    [
        'id'        => 'charts',
        'title'     => __('sneat.charts'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::COMPONENTS_CHARTS()),
        'parent_id' => 'components',
    ],

    // Grids
    [
        'id'        => 'grids',
        'title'     => __('sneat.grids'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => '',
        'parent_id' => 0,
    ],
    [
        'id'        => 'grid-custon',
        'title'     => __('sneat.custon'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::GRIDS_CUSTOM()),
        'parent_id' => 'grids',
    ],
    [
        'id'        => 'grid',
        'title'     => __('sneat.grid'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::GRIDS_GRID()),
        'parent_id' => 'grids',
    ],

    // Basic
    [
        'id'        => 'basic',
        'title'     => __('sneat.basic'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => '',
        'parent_id' => 0,
    ],
    [
        'id'        => 'basic-structure',
        'title'     => __('sneat.basic_structure'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::BASIC()),
        'parent_id' => 'basic',
    ],
    [
        'id'        => 'basic-clients',
        'title'     => __('sneat.clients'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::CLIENTS()),
        'parent_id' => 'basic',
    ],

    // Forms
    [
        'id'        => 'forms',
        'title'     => __('sneat.forms'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => '',
        'parent_id' => 0,
    ],
    // Forms - Basic Forms
    [
        'id'        => 'forms-when',
        'title'     => __('sneat.when'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::FORMS_WHEN()),
        'parent_id' => 'forms',
    ],
    // Forms - Editors
    [
        'id'        => 'forms-editors',
        'title'     => __('sneat.editors'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::FORMS_EDITORS_MARKDOWN()),
        'parent_id' => 'forms',
    ],
    [
        'id'        => 'forms-editor-markdown',
        'title'     => __('sneat.markdown'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::FORMS_EDITORS_MARKDOWN()),
        'parent_id' => 'forms-editors',
    ],

    [
        'id'        => 'forms-editor-summercode',
        'title'     => __('sneat.summercode'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::FORMS_EDITORS_SUMMERCODE()),
        'parent_id' => 'forms-editors',
    ],
    [
        'id'        => 'forms-editor-tinycme',
        'title'     => __('sneat.tinymce'),
        'icon'      => Dcat\Admin\DcatIcon::HOME_CIRCLE(),
        'uri'       => admin_route(App\Enums\RouteSneat::FORMS_EDITORS_TINYMCE()),
        'parent_id' => 'forms-editors',
    ],

];
