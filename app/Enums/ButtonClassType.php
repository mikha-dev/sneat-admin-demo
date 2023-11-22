<?php

namespace App\Enums;

use Dcat\Admin\Contracts\DcatEnum;
use Dcat\Admin\Traits\DcatEnumTrait;

enum ButtonClassType: string implements DcatEnum {
	use DcatEnumTrait;

	const BTN         = "btn";
	const OUTLINE     = "outline";
	const BTN_OUTLINE = 'btn-outline';

	const BTN_PRIMARY   = self::BTN . '-' . ColorClassType::PRIMARY;
	const BTN_SECONDARY = self::BTN . '-' . ColorClassType::SECONDARY;
	const BTN_DANGER    = self::BTN . '-' . ColorClassType::DANGER;
	const BTN_WARNING   = self::BTN . '-' . ColorClassType::WARNING;
	const BTN_SUCCESS   = self::BTN . '-' . ColorClassType::SUCCESS;
	const BTN_INFO      = self::BTN . '-' . ColorClassType::INFO;

	const BTN_OUTLINE_PRIMARY   = self::BTN_OUTLINE . '-' . ColorClassType::PRIMARY;
	const BTN_OUTLINE_SECONDARY = self::BTN_OUTLINE . '-' . ColorClassType::SECONDARY;
	const BTN_OUTLINE_DANGER    = self::BTN_OUTLINE . '-' . ColorClassType::DANGER;
	const BTN_OUTLINE_WARNING   = self::BTN_OUTLINE . '-' . ColorClassType::WARNING;
	const BTN_OUTLINE_SUCCESS   = self::BTN_OUTLINE . '-' . ColorClassType::SUCCESS;
	const BTN_OUTLINE_INFO      = self::BTN_OUTLINE . '-' . ColorClassType::INFO;

	const PRIMARY   = self::BTN . ' ' . self::BTN_PRIMARY;
	const SECONDARY = self::BTN . ' ' . self::BTN_SECONDARY;
	const DANGER    = self::BTN . ' ' . self::BTN_DANGER;
	const WARNING   = self::BTN . ' ' . self::BTN_WARNING;
	const SUCCESS   = self::BTN . ' ' . self::BTN_SUCCESS;
	const INFO      = self::BTN . ' ' . self::BTN_INFO;
}
