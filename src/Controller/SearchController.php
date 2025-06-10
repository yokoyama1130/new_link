<?php
declare(strict_types=1);

namespace App\Controller;

class SearchController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->modelClass = false; // モデル使わない場合
    }

    public function index()
    {
        $this->set('message', '検索ページへようこそ！');
    }
}
