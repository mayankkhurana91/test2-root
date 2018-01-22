<?php
namespace Test2\Test2\Controller;

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
 * DishesController
 */
class DishesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $dishes = $this->dishesRepository->findAll();
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action show
     *
     * @param \Test2\Test2\Domain\Model\Dishes $dishes
     * @return void
     */
    public function showAction(\Test2\Test2\Domain\Model\Dishes $dishes)
    {
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Test2\Test2\Domain\Model\Dishes $newDishes
     * @return void
     */
    public function createAction(\Test2\Test2\Domain\Model\Dishes $newDishes)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dishesRepository->add($newDishes);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Test2\Test2\Domain\Model\Dishes $dishes
     * @ignorevalidation $dishes
     * @return void
     */
    public function editAction(\Test2\Test2\Domain\Model\Dishes $dishes)
    {
        $this->view->assign('dishes', $dishes);
    }

    /**
     * action update
     *
     * @param \Test2\Test2\Domain\Model\Dishes $dishes
     * @return void
     */
    public function updateAction(\Test2\Test2\Domain\Model\Dishes $dishes)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dishesRepository->update($dishes);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Test2\Test2\Domain\Model\Dishes $dishes
     * @return void
     */
    public function deleteAction(\Test2\Test2\Domain\Model\Dishes $dishes)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->dishesRepository->remove($dishes);
        $this->redirect('list');
    }
}
