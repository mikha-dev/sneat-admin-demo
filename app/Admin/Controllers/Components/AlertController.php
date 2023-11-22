<?php

namespace App\Admin\Controllers\Components;

use Faker\Factory;
use Dcat\Admin\Widgets\Box;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Code;
use Dcat\Admin\Widgets\Alert;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Callout;
use Illuminate\Routing\Controller;

class AlertController extends Controller
{
    public function index(Content $content)
    {
        $faker = Factory::create();

        $callout = Callout::make($faker->text, 'Title')->light()->removable();

        $content->row(Card::make(
            <<<HTML
{$callout}

<p>{$faker->text}</p>
HTML
        ));
        $content->row(( new Callout($faker->text, 'Removable'))->dismissable());
        $content->row(( new Callout($faker->text, 'Primary'))->primary()->dismissable());
        $content->row(( new Alert($faker->text, 'Danger')));
        $content->row(( new Alert($faker->text, 'Warning'))->warning()->dismissable());
        $content->row(( new Alert($faker->text, 'Success'))->success());
        $content->row(( new Alert($faker->text, 'Info'))->info());

        $content->row(Box::make('Code', new Code(__FILE__, 15, 45))->style('default'));

        $header = 'Alert';
        $content->breadcrumb('Components');
        $content->breadcrumb($header);

        return $content->header($header);
    }
}
