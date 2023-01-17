<?php

declare(strict_types=1);

namespace Instagramm4You\Instagramm4you\Domain\Model;


/**
 * This file is part of the "Instagramm4You" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Markus Müllenborn-Pitzen, 4You Promotion GmbH
 */

/**
 * Instagram
 */
class InstaFeeds extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * accestoken
     *
     * @var string
     */
    protected $accestoken = '';

    /**
     * Returns the accestoken
     *
     * @return string
     */
    public function getAccestoken()
    {
        return $this->accestoken;
    }

    /**
     * Sets the accestoken
     *
     * @param string $accestoken
     * @return void
     */
    public function setAccestoken(string $accestoken)
    {
        $this->accestoken = $accestoken;
    }
}
