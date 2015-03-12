<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory TH - Thailand.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryTh extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'TH';
	}

	/** {@inheritdoc} */
	public function firstDay() {
		return 0;
	}
}