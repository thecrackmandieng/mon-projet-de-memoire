<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Depot;
use Illuminate\Support\Facades\Storage;

class DownloadFileController extends Controller
{
    public function downloadFile($type, $id)
    {
        if ($type == 'product') {
            $product = Product::find($id);
            if ($product && $product->file_path) {
                $filePath = storage_path('app/' . $product->file_path);
                if (file_exists($filePath)) {
                    return response()->download($filePath, $product->nom . '.pdf');
                }
            }
        } elseif ($type == 'depot') {
            $depot = Depot::find($id);
            if ($depot && $depot->file_path) {
                $filePath = storage_path('app/' . $depot->file_path);
                if (file_exists($filePath)) {
                    return response()->download($filePath, $depot->nom . '.pdf');
                }
            }
        }
        return redirect()->back()->with('error', 'Fichier introuvable');
    }
}
