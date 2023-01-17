<?php

declare(strict_types=1);

namespace Instagramm4You\Instagramm4you\Controller;


/**
 * This file is part of the "Instagramm4You" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Markus Müllenborn-Pitzen, 4You Promotion GmbH
 */

/**
 * InstaFeedsController
 */
class InstaFeedsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * instaFeedsRepository
     *
     * @var \Instagramm4You\Instagramm4you\Domain\Repository\InstaFeedsRepository
     */
    protected $instaFeedsRepository = null;

    /**
     * @param \Instagramm4You\Instagramm4you\Domain\Repository\InstaFeedsRepository $instaFeedsRepository
     */
    public function injectInstaFeedsRepository(\Instagramm4You\Instagramm4you\Domain\Repository\InstaFeedsRepository $instaFeedsRepository)
    {
        $this->instaFeedsRepository = $instaFeedsRepository;
    }

    /**
     * action index
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        $token= $this->instaFeedsRepository->findAll();
        $this->view->assign('instaFeeds', $token);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Instagramm4You\Instagramm4you\Domain\Model\InstaFeeds $instaFeeds
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Instagramm4You\Instagramm4you\Domain\Model\InstaFeeds $instaFeeds): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('instaFeeds', $instaFeeds);
        return $this->htmlResponse();
    }
}
