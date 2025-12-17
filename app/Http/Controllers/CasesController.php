<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasesController extends Controller
{
        public function index()
    {
        $cases = [
            [
                'title' => 'W.care',
                'image' => asset('images/case1.png'),
                'link' => '#',
            ],
            [
                'title' => 'Outro Case',
                'image' => asset('images/case2.png'),
                'link' => '#',
            ],
            [
                'title' => 'Mais Um Case',
                'image' => asset('images/case3.png'),
                'link' => '#',
            ],
        ];

        return $cases;
    }
}
