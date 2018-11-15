<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 売上系コントローラ
 *
 * Class SalesController
 * @package App\Http\Controllers\Admin
 */
class SalesController extends Controller
{
    /**
     * 売上一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.sales.index');
    }
}
