<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        // Lấy danh sách các Partner
        $partners = Partner::all();

        // Truyền biến $partners vào view và render view
        return view('home', compact('partners'));
}}