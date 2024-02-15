<?php

namespace WapplerSystems\WsT3Shopify\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Resource\Collection\AbstractFileCollection;
use TYPO3\CMS\Core\Resource\Exception\ResourceDoesNotExistException;
use TYPO3\CMS\Core\Resource\FileCollectionRepository;
use TYPO3\CMS\Core\Utility\DebugUtility;

/**
 * GalleryController
 *
 * @author Sven Wappler <typo3@wappler.systems>
 */
class GalleryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{


    public function __construct()
    {

    }


    /**
     * Initializes the view before invoking an action method.
     * Override this method to solve assign variables common for all actions
     * or prepare the view in another way before the action is called.
     *
     */
    protected function initializeView($view)
    {
        $view->assign('contentObjectData', $this->request->getAttribute('currentContentObject')->data);
    }

    /**
     * List action
     *
     * @return ResponseInterface
     */
    public function listAction(): ResponseInterface
    {



        return $this->htmlResponse();
    }


}
