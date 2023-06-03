<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryControllerAPI extends Controller
{
    public function index()
    {
        $country = Country::orderBy('Code','asc')->paginate(10);
        return [
            "status" => 1,
            "data" => $country
        ];
    }

    public function store(Request $request)
    {
        $request->validate([
            'Code' => 'required',
            'Name' => 'required',
            'Continent' => 'required',
            'Region' => 'required',
            'SurfaceArea' => 'required',
            'IndepYear' => '',
            'Population' => 'required',
            'LifeExpectancy' => '',
            'GNP' => '',
            'GNPOld' => '',
            'LocalName' => 'required',
            'GovernmentForm' => 'required',
            'HeadOfState' => '',
            'Capital' => '',
            'Code2' => 'required',
        ]);
 
        $country = Country::create($request->all());
        return [
            "status" => 1,
            "data" => $country
        ];
    }

    public function show(Country $country)
    {
        return [
            "status" => 1,
            "data" =>$country
        ];
    }

    public function edit(Country $country)
    {
        
    }

    public function update(Request $request, Country $country)
    {
        $request->validate([
            'Code' => 'required',
            'Name' => 'required',
            'Continent' => 'required',
            'Region' => 'required',
            'SurfaceArea' => 'required',
            'IndepYear' => '',
            'Population' => 'required',
            'LifeExpectancy' => '',
            'GNP' => '',
            'GNPOld' => '',
            'LocalName' => 'required',
            'GovernmentForm' => 'required',
            'HeadOfState' => '',
            'Capital' => '',
            'Code2' => 'required',
        ]);
 
        $country->update($request->all());
 
        return [
            "status" => 1,
            "data" => $country,
            "msg" => "Country updated successfully"
        ];
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return [
            "status" => 1,
            "data" => $country,
            "msg" => "Country deleted successfully"
        ];
    }
}
