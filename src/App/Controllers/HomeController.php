<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\TransactionService;

class HomeController
{

    public function __construct(private TemplateEngine     $view,
                                private TransactionService $transactionService)
    {
    }

    public function home()
    {
        $page = $_GET['p'] ?? 1;
        $page = (int)$page;
        $length = 3;
        $offset = ($page - 1) * $length;

        $searchTerm = $_GET['s'] ?? '';

        [$transactions, $count] = $this->transactionService->getUserTransactions($length, $offset);

        $lastPage = ceil($count / $length);
        $pages = $lastPage ? range(1, $lastPage) : [];

        $pageLinks = array_map(
            fn($pageNum) => http_build_query(['s' => $searchTerm, 'p' => $pageNum]),
            $pages
        );

        echo $this->view->render("index.php", [
            'transactions' => $transactions,
            'currentPage' => $page,
            'previousPageQuery' => http_build_query(['s' => $searchTerm, 'p' => $page - 1]),
            'lastPage' => $lastPage,
            'nextPageQuery' => http_build_query(['s' => $searchTerm, 'p' => $page + 1]),
//            'pages' => $pages,
            'pageLinks' => $pageLinks,
            'searchTerm' => $searchTerm
        ]);
    }
}