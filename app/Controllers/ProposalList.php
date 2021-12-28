<?php

namespace App\Controllers;

class ProposalList extends BaseController
{
    public function index()
    {
        return view('proposal-list');
    }
}