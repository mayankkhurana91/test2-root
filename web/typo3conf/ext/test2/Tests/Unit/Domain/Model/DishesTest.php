<?php
namespace Test2\Test2\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class DishesTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Test2\Test2\Domain\Model\Dishes
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Test2\Test2\Domain\Model\Dishes();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDishtypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDishtype()
        );
    }

    /**
     * @test
     */
    public function setDishtypeForStringSetsDishtype()
    {
        $this->subject->setDishtype('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dishtype',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getQuantityReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getQuantity()
        );
    }

    /**
     * @test
     */
    public function setQuantityForIntSetsQuantity()
    {
        $this->subject->setQuantity(12);

        self::assertAttributeEquals(
            12,
            'quantity',
            $this->subject
        );
    }
}
