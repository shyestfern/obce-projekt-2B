<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\Okres;
use App\Models\Kraj;
use App\Models\Obec;

class Main extends BaseController
{
    public $data;
    public $okres;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->okres = new Okres();
        $dataOkres = $this->okres->where('kraj', 141)->findAll();

        $this->data = [
            "okres" => $dataOkres
        ];
    }
    
    public function index()
    {   
        echo view('index', $this->data);
    }

    public function okres($kod)
    {
        $dataObce = $this->okres->join('obec', 'okres.kod = obec.okres', 'inner')
            ->join('cast_obce', 'obec.kod = cast_obce.obec', 'inner')
            ->join('ulice', 'cast_obce.kod = ulice.kod', 'inner')
            ->join('adresni_misto', '', 'inner');

        echo view('okres', $this->data);
    }
}