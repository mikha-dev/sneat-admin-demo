<?php

namespace App\Admin\Controllers\Components;

use Faker\Factory;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Box;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Code;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Widgets\Progress;
use Illuminate\Routing\Controller;
use Dcat\Admin\Enums\StyleBgClassType;

class ProgressController extends Controller
{
    public function index(Content $content)
    {
        return $content->header('Progress')
            ->row(function (Row $row) {
                $faker = Factory::create();

                $progress = new Progress($faker->numberBetween(25, 75));
                $progress->class(StyleBgClassType::PRIMARY);

                $row->column(6, new Card('Progress Privary', $progress));

                $progress = new Progress($faker->numberBetween(25, 75));
                $progress->animated()->stripped()->class(StyleBgClassType::DANGER);

                $row->column(6, new Card('Progress Danger Stripped Animated', $progress));
            })
            ->row(Box::make('Progress', new Code(__FILE__, 15, 44)));

    }
}
