<?php

namespace App\Enums;

use Dcat\Admin\DcatEnum;
use Dcat\Admin\Traits\DcatEnumTrait;

enum ColorClassType implements DcatEnum {
	use DcatEnumTrait;

	const PRIMARY    = 'primary';
	const SECONDARY  = 'secondary';
	const SUCCESS    = 'success';
	const DANGER     = 'danger';
	const WARNING    = 'warning';
	const INFO       = 'info';
	const ALL_COLORS = [
		self::PRIMARY,
		self::SECONDARY,
		self::SUCCESS,
		self::WARNING,
		self::DANGER,
		self::INFO,
	];
}
