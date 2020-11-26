<?php
namespace FREESIXTYFIVE\FsfZollerSimpleheader\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class SimpleheaderControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerSimpleheader\Controller\SimpleheaderController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerSimpleheader\Controller\SimpleheaderController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSimpleheadersFromRepositoryAndAssignsThemToView()
    {

        $allSimpleheaders = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $simpleheaderRepository = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerSimpleheader\Domain\Repository\SimpleheaderRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $simpleheaderRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSimpleheaders));
        $this->inject($this->subject, 'simpleheaderRepository', $simpleheaderRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('simpleheaders', $allSimpleheaders);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
