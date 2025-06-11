<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class m_DataPemilih extends Model
{
    use HasFactory;

    public function tampilDataPemilih()
    {
        return DB::table('users')
            ->select('id', 'name', 'email', 'status')
            ->get();
    }
} 