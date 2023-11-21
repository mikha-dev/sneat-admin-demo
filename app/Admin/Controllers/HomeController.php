<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Dcat\Admin\Enums\RouteAuth;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\ImageAdv;
use Dcat\Admin\Widgets\Cards\PictureCard;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Description...')
            ->body(function (Row $row) {
                $row->column(6, function (Column $column) {
                    $column->row(new PictureCard(
                        __('admin.title'),
                        __('admin.description'),
                        admin_route(RouteAuth::SETTINGS()),
                        new ImageAdv('/vendor/dcat-admin/images/illustrations/man-with-laptop-light.png', '/vendor/dcat-admin/images/illustrations/man-with-laptop-dark.png', 'alt'))
                    );
                    //$column->row(new Examples\Tickets());
                });

                $row->column(6, function (Column $column) {
                    $column->row(function (Row $row) {
                      //  $row->column(6, new Examples\NewUsers());
//                        $row->column(6, new Examples\NewDevices());
                    });

  //                  $column->row(new Examples\Sessions());
  //                  $column->row(new Examples\ProductOrders());
                });
            });
    }
}
