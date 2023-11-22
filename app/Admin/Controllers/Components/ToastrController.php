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

class ToastrController extends Controller
{
    public function index(Content $content)
    {
        $faker = Factory::create();

        admin_toastr($faker->text(200));
        return $content->header('Toastr');
    }
}
