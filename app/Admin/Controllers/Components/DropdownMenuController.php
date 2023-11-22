<?php

namespace App\Admin\Controllers\Components;

use App\Enums\ButtonClassType;
use App\Enums\ColorClassType;
use Dcat\Admin\Layout\Content;
use App\Admin\Traits\PreviewCode;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Dropdown;
use Illuminate\Routing\Controller;

class DropdownMenuController extends Controller {
	use PreviewCode;

	protected $colors = ColorClassType::ALL_COLORS;

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
				->buttonClass(ButtonClassType::BTN . ' ' . ButtonClassType::BTN . '-' . $color)
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
				->buttonClass(ButtonClassType::BTN . ' ' . ButtonClassType::BTN_OUTLINE . '-' . $color)
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
				->buttonClass(ButtonClassType::BTN . ' ' . ButtonClassType::BTN . '-' . $color)
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
				->buttonClass(ButtonClassType::BTN . ' ' . ButtonClassType::BTN_OUTLINE . '-' . $color)
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
			->buttonClass(ButtonClassType::PRIMARY)
			->hideArrow()
			->add('option1')
			->add('option2', TRUE)
			->add('option1', TRUE, TRUE)
			->render();
		$iconWithDropdown = new Dropdown();
		$iconWithDropdown->button('primary')
			->buttonClass(ButtonClassType::PRIMARY)
			->icon('bx bx-menu me-1')
			->add('option1')
			->add('option2', TRUE)
			->add('option1', TRUE, TRUE)
			->render();
		$icon = new Dropdown();
		$icon->buttonClass(ButtonClassType::PRIMARY . " btn-icon rounded-pill")
			->hideArrow()
			->icon('bx bx-dots-vertical-rounded')
			->add('option1')
			->add('option2', TRUE)
			->add('option1', TRUE, TRUE)
			->render();
		return Card::make('specific Dropdown', $hiddenArrow . ' ' . $iconWithDropdown . ' ' . $icon);
	}
}
