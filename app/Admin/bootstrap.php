<?php

use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Admin;
use Dcat\Admin\Layout\Footer;
use Dcat\Admin\Layout\Navbar;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

Admin::navbar(function (Navbar $navbar) {
    if (! Dcat\Admin\Support\Helper::isAjaxRequest()) {
        $navbar->start('test_start');
        $navbar->end('test_end');
    }
});

Admin::footer(function (Footer $footer) {
    if (! Dcat\Admin\Support\Helper::isAjaxRequest()) {
        $footer->start('test_start');
        $footer->end('test_end');
    }
});
