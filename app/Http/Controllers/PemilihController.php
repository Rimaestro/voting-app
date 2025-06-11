<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_DataPemilih;

class PemilihController extends Controller
{
    public function index()
    {
        $model = new m_DataPemilih();
        $data = [
            'pemilih' => $model->tampilDataPemilih(),
        ];
        
        return view('v_DaftarPemilih', $data);
    }
} 