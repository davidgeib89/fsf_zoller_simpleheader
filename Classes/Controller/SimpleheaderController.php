<?php
namespace FREESIXTYFIVE\FsfZollerSimpleheader\Controller;


/***
 *
 * This file is part of the "Zoller Simpleheader" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 David Geib <d.geib@freesixtyfive.de>, FREESIXTYFIVE
 *
 ***/
/**
 * SimpleheaderController
 */
class SimpleheaderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * simpleheaderRepository
     * 
     * @var \FREESIXTYFIVE\FsfZollerSimpleheader\Domain\Repository\SimpleheaderRepository
     */
    protected $simpleheaderRepository = null;

    /**
     * @param \FREESIXTYFIVE\FsfZollerSimpleheader\Domain\Repository\SimpleheaderRepository $simpleheaderRepository
     */
    public function injectSimpleheaderRepository(\FREESIXTYFIVE\FsfZollerSimpleheader\Domain\Repository\SimpleheaderRepository $simpleheaderRepository)
    {
        $this->simpleheaderRepository = $simpleheaderRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $simpleheaders = $this->simpleheaderRepository->findAll();
        $this->view->assign('simpleheaders', $simpleheaders);
        $this->view->assign('rand', md5(rand() + rand()));
    }
}
