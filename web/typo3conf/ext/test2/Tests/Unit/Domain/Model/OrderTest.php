<?php
namespace Test2\Test2\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class OrderTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Test2\Test2\Domain\Model\Order
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Test2\Test2\Domain\Model\Order();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForIntSetsId()
    {
        $this->subject->setId(12);

        self::assertAttributeEquals(
            12,
            'id',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCustname()
        );
    }

    /**
     * @test
     */
    public function setCustnameForStringSetsCustname()
    {
        $this->subject->setCustname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'custname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishesReturnsInitialValueForDishes()
    {
        self::assertEquals(
            null,
            $this->subject->getDishes()
        );
    }

    /**
     * @test
     */
    public function setDishesForDishesSetsDishes()
    {
        $dishesFixture = new \Test2\Test2\Domain\Model\Dishes();
        $this->subject->setDishes($dishesFixture);

        self::assertAttributeEquals(
            $dishesFixture,
            'dishes',
            $this->subject
        );
    }
}
