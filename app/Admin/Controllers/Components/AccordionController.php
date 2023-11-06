<?php

namespace App\Admin\Controllers\Components;

use Faker\Factory;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Box;
use Dcat\Admin\Widgets\Code;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Accordion;
use Illuminate\Routing\Controller;

class AccordionController extends Controller
{
    public function index(Content $content)
    {
        return $content->header('Accordion')
            ->row(function (Row $row) {
                $faker = Factory::create();

                $collapse = Accordion::make();

                $collapse->add($faker->name(), $faker->text(200), NULL, true);
                $collapse->add($faker->name(), $faker->text(200));
                $collapse->add($faker->name(), $faker->text(200));
                $collapse->add($faker->name(), $faker->text(200));
                $collapse->add($faker->name(), $faker->text(200));

                $row->column(5, Box::make('Accordion', $collapse)->style('default'));

                $collapse = Accordion::make();

                $collapse->add($faker->name(), $faker->text(200));
                $collapse->add($faker->name(), $faker->text(200));
                $collapse->add($faker->name(), $faker->text(200));
                $collapse->add($faker->name(), $faker->text(200));
                $collapse->add($faker->name(), $faker->text(200));
                $row->column(5, $collapse);
            })
            ->row(Box::make('Accordion', new Code(__FILE__, 15, 44))->style('default'));

    }
}
