<?php

namespace App\Controller;

use App\Model\AbstractManager;
use App\Model\ApiManager;

class MonsterController extends AbstractController
{
    public function index()
    {
        $log='Login';

        $apiManager = new ApiManager();
        if (!isset($_POST['level']) || ($_POST['level']) == 'all') {
            $getMonsters = $apiManager->getAllMonsters();
            return $this->twig->render('Monster/index.html.twig', ['monsters' => $getMonsters, 'log' => $log]);

        }else{
            $getMonsters = $apiManager->getAllMonstersById($_POST['level']);
            return $this->twig->render('Monster/index.html.twig', ['monsters' => $getMonsters, 'log' => $log]);
        }
}

}