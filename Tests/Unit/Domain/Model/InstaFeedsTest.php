<?php

declare(strict_types=1);

namespace Instagramm4You\Instagramm4you\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Markus Müllenborn-Pitzen 
 */
class InstaFeedsTest extends UnitTestCase
{
    /**
     * @var \Instagramm4You\Instagramm4you\Domain\Model\InstaFeeds|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Instagramm4You\Instagramm4you\Domain\Model\InstaFeeds::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAccestokenReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getAccestoken()
        );
    }

    /**
     * @test
     */
    public function setAccestokenForStringSetsAccestoken(): void
    {
        $this->subject->setAccestoken('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('accestoken'));
    }
}
