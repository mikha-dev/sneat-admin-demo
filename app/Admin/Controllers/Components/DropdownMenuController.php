<?php

namespace App\Admin\Controllers\Components;

use Dcat\Admin\Layout\Content;
use App\Admin\Traits\PreviewCode;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Dropdown;
use Illuminate\Routing\Controller;

class DropdownMenuController extends Controller {
	use PreviewCode;

	protected $colors = [
		'primary',
		'secondary',
		'warning',
		'danger',
		'success',
		'info',
	];

	public function index(Content $content) {
		$header = 'DropDown';
		return $content->header($header)
			->breadcrumb($header)
			->row($this->buildPreviewButton())
			->row($this->base())
			->row($this->outline())
			->row($this->split())
			->row($this->outlineSplit())
			->row($this->specific());
	}

	public function base() {
		$base = collect($this->colors)->map(function ($color) {
			$dropdown = new Dropdown();
			return $dropdown->button($color)
				->buttonClass("btn btn-$color")
				->add('option1')
				->add('option2', TRUE)
				->add('option1', TRUE, TRUE)
				->render();
		})->join(' ');
		return Card::make('Base Dropdown', $base);
	}

	public function outline() {
		$base = collect($this->colors)->map(function ($color) {
			$dropdown = new Dropdown();
			return $dropdown->button($color)
				->buttonClass("btn btn-outline-$color")
				->add('option1')
				->add('option2', TRUE)
				->add('option1', TRUE, TRUE)
				->render();
		})->join(' ');
		return Card::make('Outline Dropdown', $base);
	}

	public function split() {
		$base = collect($this->colors)->map(function ($color) {
			$dropdown = new Dropdown();
			return $dropdown->button($color)
				->buttonClass("btn btn-$color")
				->toggleSplit()
				->add('option1')
				->add('option2', TRUE)
				->add('option1', TRUE, TRUE)
				->render();
		})->join(' ');
		return Card::make('Split Dropdown', $base);
	}

	public function outlineSplit() {
		$base = collect($this->colors)->map(function ($color) {
			$dropdown = new Dropdown();
			return $dropdown->button($color)
				->buttonClass("btn btn-outline-$color")
				->toggleSplit()
				->add('option1')
				->add('option2', TRUE)
				->add('option1', TRUE, TRUE)
				->render();
		})->join(' ');
		return Card::make('Outline Split Dropdown', $base);
	}

	public function specific() {
		$hiddenArrow = new Dropdown();
		$hiddenArrow->button('primary')
			->buttonClass("btn btn-primary")
			->hideArrow()
			->add('option1')
			->add('option2', TRUE)
			->add('option1', TRUE, TRUE)
			->render();
		$iconWithDropdown = new Dropdown();
		$iconWithDropdown->button('primary')
			->buttonClass("btn btn-primary")
			->icon('bx bx-menu me-1')
			->add('option1')
			->add('option2', TRUE)
			->add('option1', TRUE, TRUE)
			->render();
		$icon = new Dropdown();
		$icon->buttonClass("btn btn-primary btn-icon rounded-pill")
			->hideArrow()
			->icon('bx bx-dots-vertical-rounded')
			->add('option1')
			->add('option2', TRUE)
			->add('option1', TRUE, TRUE)
			->render();
		return Card::make('specific Dropdown', $hiddenArrow . ' ' . $iconWithDropdown . ' ' . $icon);
	}
}
