<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\Okres;

class Main extends BaseController
{
    public $data;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $okres = new Okres();
        $dataOkres = $okres->where('kraj', 141)->findAll();

        $this->data = [
            "okres" => $dataOkres
        ];
    }
    
    public function index()
    {
        echo view('index', $this->data);
    }
}