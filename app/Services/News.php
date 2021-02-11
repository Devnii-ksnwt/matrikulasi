<?php

namespace App\Services;

class Adminproducts extends Service
{
    public function index($filter = [])
    {
        $response = $this->get('/news', $filter);

        return $this->showResponse($response);
    }  

