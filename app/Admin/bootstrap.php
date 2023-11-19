<?php

use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Admin;
use Dcat\Admin\DcatIcon;
use Dcat\Admin\Layout\Footer;
use Dcat\Admin\Layout\Navbar;
use Dcat\Admin\Layout\UserNav;
use Dcat\Admin\Enums\RouteAuth;
use Dcat\Admin\Layout\ColoredBadge;
use Illuminate\Support\Facades\App;
use Dcat\Admin\Enums\StyleClassType;
use Dcat\Admin\Layout\UserNavElement;
use Illuminate\Support\Facades\Session;
use Dcat\Admin\Widgets\Navs\ShortcutsNav;
use Dcat\Admin\Widgets\Navs\LangSelectorNav;
use Dcat\Admin\Widgets\Navs\DarkModeSwitcher;
use Dcat\Admin\Widgets\Navs\DarkModeSwitcherNav;
use Dcat\Admin\Widgets\Navs\DashboardNotificationNav;

Form::resolving(function($form) {
    $form->disableEditingCheck();
    $form->disableViewCheck();
    $form->disableCreatingCheck();
});

Grid\Column::extend('code', function ($v) {
    return "<code>$v</code>";
});

config(admin_setting()->toArray());
$locale = Session::get('locale');

if(empty($locale))
    $locale = config('admin.locale');

if(!empty($locale) && !App::isLocale($locale)) {
    App::setLocale($locale);
}

if (! Dcat\Admin\Support\Helper::isAjaxRequest()) {

    Admin::navbar(function (Navbar $navbar) {
        $navbar->putFree(new DarkModeSwitcher());

        $navbar->putNav(new LangSelectorNav());
        $navbar->putNav(new ShortcutsNav( function (ShortcutsNav $shortcuts) {
            $shortcuts->add(DcatIcon::CALENDAR(), __('admin.calendar'), __('admin.appointments'), admin_route(RouteAuth::HOME()));
        }));
        $navbar->putNav(new DarkModeSwitcherNav());
        $navbar->putNav(new DashboardNotificationNav());
    });

    Admin::footer(function (Footer $footer) {
        $footer->start('test_start');
        $footer->end('test_end');
    });

    Admin::userNav(function (UserNav $userNav) {
        $userNav->put(new UserNavElement($userNav, admin_route(RouteAuth::HOME()), DcatIcon::HOME(), __('admin.home'), new ColoredBadge(5, StyleClassType::DANGER), true));
    });
}
