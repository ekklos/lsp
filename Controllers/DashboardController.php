<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
      {
        $total= Product::count();
        return view('pages.dashboard', [
          'total' => $total
        ]);
      }
    }

