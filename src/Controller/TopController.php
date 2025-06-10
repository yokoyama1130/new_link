<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

class TopController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        // モデルを自動で読み込まないように明示
        $this->modelClass = false;
    }

    public function index()
    {
        $this->set('message', 'トップページへようこそ！');
    }
}
