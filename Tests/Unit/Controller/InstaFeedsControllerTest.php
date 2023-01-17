<?php

declare(strict_types=1);

namespace Instagramm4You\Instagramm4you\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Markus Müllenborn-Pitzen 
 */
class InstaFeedsControllerTest extends UnitTestCase
{
    /**
     * @var \Instagramm4You\Instagramm4you\Controller\InstaFeedsController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Instagramm4You\Instagramm4you\Controller\InstaFeedsController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenInstaFeedsToView(): void
    {
        $instaFeeds = new \Instagramm4You\Instagramm4you\Domain\Model\InstaFeeds();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('instaFeeds', $instaFeeds);

        $this->subject->showAction($instaFeeds);
    }
}
