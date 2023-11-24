<?php
declare(strict_types=1);

namespace App\Admin\Controllers\Components;

use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Form;
use Faker\Factory;
use Dcat\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class ToasterController extends Controller
{
    public function index(Content $content)
    {
        $faker = Factory::create();

        admin_toastr($faker->text(200));
        return $content->header('Toastr')
	        ->row(function (Row $row){
				$form=new Form();
//				$form->select(1,)->label('type');
				$row->column(12,Card::make('Toasts',$form));
	        });
    }
}
