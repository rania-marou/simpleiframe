<?php
namespace Simpleiframe\Simpleiframe\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * IframeController
 */
class IframeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * iframeRepository
	 *
	 * @var \Simpleiframe\Simpleiframe\Domain\Repository\IframeRepository
	 * @inject
	 */
	protected $iframeRepository = NULL;

	/**
	 * action index
	 *
	 * @return void
	 */
	public function indexAction() {
        $extConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['simpleiframe']);
        $this->view->assign('URL', $extConfiguration['URL']);
    }

}