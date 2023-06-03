<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\Auth;

class CityControllerAPI extends Controller
{
    public function index()
    {
        $city = City::orderBy('ID','asc')->paginate(10);
       
        return [
            "status" => 1,
            "data" => $city
        ];
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'CountryCode' => 'required',
            'District' => 'required',
            'Population' => 'required',
        ]);
 
        $city = City::create($request->all());
        return [
            "status" => 1,
            "data" => $city
        ];
    }

    public function show(City $city)
    {
        return [
            "status" => 1,
            "data" =>$city
        ];
    }

    public function edit(City $city)
    {
        
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'Name' => 'required',
            'CountryCode' => 'required',
            'District' => 'required',
            'Population' => 'required',
        ]);
 
        $city->update($request->all());
 
        return [
            "status" => 1,
            "data" => $city,
            "msg" => "City updated successfully"
        ];
    }

    public function destroy(City $city)
    {
        $city->delete();
        return [
            "status" => 1,
            "data" => $city,
            "msg" => "City deleted successfully"
        ];
    }
}
