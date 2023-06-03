<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('Code','asc')->paginate(10);
        return view('country.index', compact('countries'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request,)
    {
        $request->validate([
            'Name' => 'required',
            'Continent' => 'required',
            'Region' => 'required',
            'SurfaceArea' => 'required',
            'IndepYear' => 'required',
            'Population' => 'required',
            'LifeExpectancy' => 'required',
            'GNP' => 'required',
            'GNPOld' => 'required',
            'LocalName' => 'required',
            'GovernmentForm' => 'required',
            'HeadOfState' => 'required',
            'Capital' => 'required',
            'Code2' => 'required',
        ]);
        
        Country::create($request->post());

        return redirect()->route('country.index')->with('success','Country has been created successfully.');
    }

    public function show(Country $country)
    {
        return view('country.show',compact('country'));
    }

    public function edit(Country $country)
    {
        return view('country.edit',compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $request->validate([
            'Name' => 'required',
            'Continent' => 'required',
            'Region' => 'required',
            'Population' => 'required',
        ]);
        
        $country->fill($request->post())->save();

        return redirect()->route('country.index')->with('success','Country Has Been updated successfully');
    }

    /* Commented out because the code is used as a foreign key in table City and I do not care enough about this homework :D

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('country.index')->with('success','Country has been deleted successfully');
    }*/
}