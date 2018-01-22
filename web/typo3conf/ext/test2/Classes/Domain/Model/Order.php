<?php
namespace Test2\Test2\Domain\Model;

/***
 *
 * This file is part of the "Test2" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * id
     *
     * @var int
     */
    protected $id = 0;

    /**
     * custname
     *
     * @var string
     */
    protected $custname = '';

    /**
     * dishes
     *
     * @var \Test2\Test2\Domain\Model\Dishes
     */
    protected $dishes = null;

    /**
     * Returns the id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Returns the custname
     *
     * @return string $custname
     */
    public function getCustname()
    {
        return $this->custname;
    }

    /**
     * Sets the custname
     *
     * @param string $custname
     * @return void
     */
    public function setCustname($custname)
    {
        $this->custname = $custname;
    }

    /**
     * Returns the dishes
     *
     * @return \Test2\Test2\Domain\Model\Dishes $dishes
     */
    public function getDishes()
    {
        return $this->dishes;
    }

    /**
     * Sets the dishes
     *
     * @param \Test2\Test2\Domain\Model\Dishes $dishes
     * @return void
     */
    public function setDishes(\Test2\Test2\Domain\Model\Dishes $dishes)
    {
        $this->dishes = $dishes;
    }
}
