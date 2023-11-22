<?php

namespace App\Admin\Controllers\Components;

use Dcat\Admin\Layout\Content;
use App\Admin\Traits\PreviewCode;
use Illuminate\Routing\Controller;

class DropdownMenuController extends Controller
{
    use PreviewCode;

    public function index(Content $content)
    {
        return $content->header('Dropdowns')
            ->body($this->dropdownsBasic());
    }

    private function dropdownsBasic() : string {
        return <<<HTML
<div class="card mb-4" id="btn-dropdown-demo">
  <h5 class="card-header">Dropdowns</h5>

  <!-- Basic Dropdowns -->
  <div class="card-body">
    <small class="text-light fw-medium">Basic</small>
    <div class="demo-inline-spacing">
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item disabled" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Success</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Danger</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Info</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Basic Dropdowns -->
  <hr class="m-0">

  <!-- Outline Dropdowns -->
  <div class="card-body">
    <small class="text-light fw-medium">Outline</small>
    <div class="demo-inline-spacing">
      <div class="btn-group">
        <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Success</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Danger</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Info</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Basic Dropdowns -->
  <hr class="m-0">
  <!-- Split Dropdowns -->
  <div class="card-body">
    <small class="text-light fw-medium">Split</small>
    <div class="demo-inline-spacing">
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" style="">
          <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Split Dropdowns -->

  <hr class="m-0">

  <div class="card-body">
    <div class="row gy-3">
      <!-- Hidden Arrow Dropdowns -->
      <div class="col-lg-3 col-sm-6 col-12">
        <small class="text-light fw-medium">Hidden arrow</small>
        <div class="demo-inline-spacing">
          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">Hidden arrow </button>
            <ul class="dropdown-menu" style="">
              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Hidden Arrow Dropdowns -->
      <!-- Dropdown with icon -->
      <div class="col-lg-3 col-sm-6 col-12">
        <small class="text-light fw-medium">With Icon</small>
        <div class="demo-inline-spacing">
          <div class="btn-group" id="dropdown-icon-demo">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-menu me-1"></i> With Icon</button>
            <ul class="dropdown-menu" style="">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Action</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Another action</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="bx bx-chevron-right scaleX-n1-rtl"></i>Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Dropdown with icon -->
      <!-- Icon Dropdown -->
      <div class="col-lg-3 col-sm-6 col-12">
        <small class="text-light fw-medium">Icon Dropdown</small>
        <div class="demo-inline-spacing">
          <div class="btn-group">
            <button type="button" class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
            <ul class="dropdown-menu dropdown-menu-end" style="">
              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Icon Dropdown -->
    </div>
  </div>

</div>
HTML;
    }

}
