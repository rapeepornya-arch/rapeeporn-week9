<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products', ['products' => [
            ['name' => 'Laravel Book', 'price' => 350],
            ['name' => 'PHP Notebook', 'price' => 120],
            ['name' => 'Bootstrap Guide', 'price' => 280],
        ]]);
    }

    public function store(Request $request): RedirectResponse
    {
        return back()->with('status', 'รับข้อมูลสินค้าแล้ว');
    }
}
