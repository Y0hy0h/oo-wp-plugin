<?php

/**
 *
 *    Copyright (C) 2019 onOffice GmbH
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU Affero General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

declare (strict_types=1);

namespace onOffice\WPlugin\Model\InputModel;

use onOffice\WPlugin\Model\InputModelOption;
use const __;

/**
 *
 */

class InputModelConfigurationFormContact
	implements InputModelConfiguration
{
	/** @var array */
	private $_config = [
		InputModelDBFactoryConfigForm::INPUT_FORM_ESTATE_CONTEXT_AS_HEADING => [
			self::KEY_HTMLTYPE => InputModelOption::HTML_TYPE_CHECKBOX,
		],
	];


	/**
	 *
	 */

	public function __construct()
	{
		$this->_config[InputModelDBFactoryConfigForm::INPUT_FORM_ESTATE_CONTEXT_AS_HEADING]
			[self::KEY_LABEL] = __('Set Estate Context as Heading', 'onoffice');
	}


	/**
	 *
	 * @return array
	 *
	 */

	public function getConfig(): array
	{
		return $this->_config;
	}
}
