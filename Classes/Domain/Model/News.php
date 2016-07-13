<?php

namespace SIWA\Newsttaddress\Domain\Model;

/*
 * This file is part of the TYPO3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License, either version 3
 * of the License, or (at your option) any later version.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class News
 *
 * @package SIWA\Newsttaddress\Domain\Model
 */
class News extends \GeorgRinger\News\Domain\Model\News {

	/**
	 * @var \TYPO3\TtAddress\Domain\Model\Address
	 *
	 */
	protected $address;

	/**
	 * @param \TYPO3\TtAddress\Domain\Model\Address $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @return \TYPO3\TtAddress\Domain\Model\Address
	 */
	public function getAddress() {
		return $this->address;
	}

}