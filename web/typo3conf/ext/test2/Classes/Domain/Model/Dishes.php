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
 * Dishes
 */
class Dishes extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * dishtype
     *
     * @var string
     */
    protected $dishtype = '';

    /**
     * quantity
     *
     * @var int
     */
    protected $quantity = 0;

    /**
     * Returns the dishtype
     *
     * @return string $dishtype
     */
    public function getDishtype()
    {
        return $this->dishtype;
    }

    /**
     * Sets the dishtype
     *
     * @param string $dishtype
     * @return void
     */
    public function setDishtype($dishtype)
    {
        $this->dishtype = $dishtype;
    }

    /**
     * Returns the quantity
     *
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     *
     * @param int $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
