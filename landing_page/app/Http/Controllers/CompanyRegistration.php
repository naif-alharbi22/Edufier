<?php

namespace App\Http\Controllers;
use App\Models\Company_data;
use Illuminate\Http\Request;

class CompanyRegistration extends Controller
{
    public function CompanyRegistration()
    {

        return view('CompanyRegistration');
    }
    public function store(Request $request)
    {
        $request->validate([
            'companyName' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNumber' => 'nullable|string|max:15',
            'relationshipManager' => 'required|string|max:255',
            'previousKnowledge' => 'nullable|boolean',
        ]);

        Company_data::create([
            'name' => $request->companyName,
            'email' => $request->email,
            'nuber_phone' => $request->phoneNumber,
            'Relations_Officer' => $request->relationshipManager,
            'Knowledge_transfer' => $request->previousKnowledge,
                    ]);

        return redirect()->back()->with('success', 'تم حفظ البيانات بنجاح!');
    }
}