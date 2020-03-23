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

namespace onOffice\tests;

use Closure;
use Exception;
use onOffice\tests\EstateListMocker;
use onOffice\WPlugin\Controller\EstateListBase;
use onOffice\WPlugin\Controller\EstateViewSimilarEstatesEnvironmentDefault;
use onOffice\WPlugin\DataView\DataViewSimilarEstates;
use onOffice\WPlugin\Template;
use WP_UnitTestCase;

/**
 *
 * @url http://www.onoffice.de
 * @copyright 2003-2019, onOffice(R) GmbH
 *
 */

class TestClassEstateViewSimilarEstatesEnvironmentDefault
	extends WP_UnitTestCase
{
	/**
	 *
	 */
	public function testGetEstateList()
	{
		$pEstateViewSimilarEstatesEnvironmentDefault = $this->getNewInstance();
		$pEstateList = $pEstateViewSimilarEstatesEnvironmentDefault->getEstateList();
		$this->assertInstanceOf(EstateListBase::class, $pEstateList);
		$this->assertFalse($pEstateList->getFormatOutput());
	}

	/**
	 *
	 */
	public function testGetTemplate()
	{
		$pInstance = $this->getNewInstance();
		$pTemplate = $pInstance->getTemplate();
		$this->assertInstanceOf(Template::class, $pTemplate);
	}

	/**
	 * @return EstateViewSimilarEstatesEnvironmentDefault
	 * @throws Exception
	 */
	private function getNewInstance(): EstateViewSimilarEstatesEnvironmentDefault
	{
		$pDataView = new DataViewSimilarEstates();
		$pEstateList = new EstateListMocker($pDataView);
		$this->assertTrue($pEstateList->getFormatOutput());
		return new EstateViewSimilarEstatesEnvironmentDefault($pDataView, $pEstateList);
	}
}
