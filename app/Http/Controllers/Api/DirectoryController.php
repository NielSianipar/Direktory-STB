<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    // Fungsi umum untuk mengambil data berdasarkan kategori
    private function getByCategory($category)
    {
        $data = Person::where('category', $category)->get();
        return response()->json([
            'status' => 'success',
            'category' => $category,
            'count' => $data->count(),
            'data' => $data
        ]);
    }

    public function mahasiswa() { return $this->getByCategory('mahasiswa'); }
    public function dosen() { return $this->getByCategory('dosen'); }
    public function staff() { return $this->getByCategory('staff'); }
}