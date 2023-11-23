<?php

namespace App\Admin\Controllers\Components;

use Faker\Factory;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Code;
use Dcat\Admin\Layout\Content;
use Illuminate\Routing\Controller;
use Dcat\Admin\Widgets\Tab;

class TabsController extends Controller
{
    public function index(Content $content)
    {
        return $content->header('Tabs')
            ->row(function (Row $row) {
                $faker = Factory::create();

                $tabs1 = new Tab();
                $tabs1->add($faker->text(20), $faker->text(200), true, 'first');
                $tabs1->add($faker->text(20), $faker->text(200), false, 'second');
                $tabs1->add($faker->text(20), $faker->text(200), false, 'third');

                $row->column(6, new Card('Basic', $tabs1));

                $tabs2 = new Tab();
                $tabs2->add($faker->text(20), $faker->text(200), true, 'first');
                $tabs2->add($faker->text(20), $faker->text(200), false, 'second');
                $tabs2->add($faker->text(20), $faker->text(200), false, 'third');

                $row->column(6, new Card('Filled Tab', $tabs2));
            })
            ->row(function (Row $row) {
                $faker = Factory::create();

                $tabs1 = new Tab();
                $tabs1->add($faker->text(20), $faker->text(200), true, 'first');
                $tabs1->add($faker->text(20), $faker->text(200), false, 'second');
                $tabs1->add($faker->text(20), $faker->text(200), false, 'third');

                $row->column(6, new Card('Pills Basic', $tabs1));

                $tabs2 = new Tab();
                $tabs2->add($faker->text(20), $faker->text(200), true, 'first');
                $tabs2->add($faker->text(20), $faker->text(200), false, 'second');
                $tabs2->add($faker->text(20), $faker->text(200), false, 'third');

                $row->column(6, new Card('Pills Filled', $tabs2));
            })

            ->row(new Card('Code', new Code(__FILE__, 15, 44)));

    }
}
