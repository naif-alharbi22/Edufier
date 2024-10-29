<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;
use PDF;
use App\Models\Company_data;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CompanyDataExport;

class Dashboard extends Controller
{
    public function dashboard()
    {
        $companyData = Company_data::all();
        $count = $companyData->count();

        return view('dashboard', compact('companyData', 'count'));
    }

    public function exportPDF()
    {
        $companyData = Company_data::all();
        $count = $companyData->count(); 

        $pdf = PDF::loadView('pdf.company_data', compact('companyData', 'count'))
        ->setOptions(['defaultFont' => 'Amiri', 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        return $pdf->download('company_data.pdf');
    }
}

