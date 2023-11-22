<?php

return [
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
];
