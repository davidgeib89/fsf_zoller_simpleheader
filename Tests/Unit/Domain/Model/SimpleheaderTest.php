<?php
namespace FREESIXTYFIVE\FsfZollerSimpleheader\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class SimpleheaderTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerSimpleheader\Domain\Model\Simpleheader
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FREESIXTYFIVE\FsfZollerSimpleheader\Domain\Model\Simpleheader();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
