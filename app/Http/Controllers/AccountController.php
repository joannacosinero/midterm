<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class AccountController extends Controller
{
    public function index() {
        $acc = Accounts::orderBy('acct_name')->get();

        return view('account.accounts', ['accounts'=>$acc]);
    }
}
