<?php

namespace App\Http\Controllers;

use App\Companies;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
        $companies = \App\Companies::paginate(5);
        return view('companies.index', compact('companies'));
    }else {
        return redirect()->route('login');
    }
}

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {   
        //dd($request->all);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jfif,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|url|max:255',
        ]);

       
        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $file->move(public_path('\logos'), $file->getClientOriginalName());

            $validatedData['logo'] = $file->getClientOriginalName();
        }

        $companies = \App\Companies::create($validatedData);

        return redirect()->route('companies.index', $companies->id)
            ->with('success', 'Company created successfully.');
    }

    public function show($id)
    {
        $companies = \App\Companies::findOrFail($id);
        return view('companies.show', compact('companies'));
    }

    public function edit($id)
    {
        $companies = \App\Companies::findOrFail($id);
        return view('companies.edit', compact('companies'));
    }

    public function update(Request $request)
    {
        $id = $request->get('company_id');
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jfif,jpg,gif,svg|max:2048|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|url|max:255',
        ]);

        $companies = Companies::findOrFail($id);


        if ($request->hasFile('logo')) {

            $file = $request->file('logo');
            $file->move(public_path('\logos'), $file->getClientOriginalName());

            $validatedData['logo'] = $file->getClientOriginalName();
        }

        $companies->update($validatedData);

        return redirect()->route('companies.index', $id)
            ->with('success', 'Company updated successfully.');
    }

    public function destroy($id)
    {
        //dd($id);
        $companies = \App\Companies::findOrFail($id);
        $companies->delete();

        return redirect()->route('companies.index')
            ->with('success', 'Company deleted successfully.');
    }
}
