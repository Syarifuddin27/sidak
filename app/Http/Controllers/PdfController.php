<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use App\User;
use App\Pendidikan;
use App\Nonpendidikan;
use App\Pengalaman;
use App\Jabatan;
use App\Doc;
use App\Karyawan;
use App\Category;
use App\Verifi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use File;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('pdf.index', compact('karyawan'));
        return $pdf->stream();
    }
}
