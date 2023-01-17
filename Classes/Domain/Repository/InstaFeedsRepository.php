<?php

declare(strict_types=1);

namespace Instagramm4You\Instagramm4you\Domain\Repository;


/**
 * This file is part of the "Instagramm4You" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Markus Müllenborn-Pitzen, 4You Promotion GmbH
 */

/**
 * The repository for InstaFeeds
 */
class InstaFeedsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findAll()
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $query->getQuerySettings()->setRespectSysLanguage(FALSE);
        return $query->execute();
    }
}
