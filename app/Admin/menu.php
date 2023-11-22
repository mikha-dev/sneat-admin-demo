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
];
