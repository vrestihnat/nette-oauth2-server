<?php
declare(strict_types = 1);

namespace App\Presenters;

use Nette;
use Kdyby\Doctrine\EntityManager;

final class HomePresenter extends Nette\Application\UI\Presenter
{

/** @var EntityManager @inject */
    public EntityManager $entityManager;

    public function renderDefault()
    {
//        $conn = $this->entityManager->getConnection();
        phpinfo();
        
    }

}
