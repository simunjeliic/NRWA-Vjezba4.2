<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{
    public function index()
    {
        $city = City::orderBy('ID','desc')->paginate(10);
        return view('city.index', compact('city'));
    }

    public function create()
    {

        
        $CountryCode = Country::get(['Code', 'Name']);
        return view('city.create', compact('CountryCode'));
        
    }

    public function store(Request $request,)
    {
        $request->validate([
            'Name' => 'required',
            'CountryCode' => 'required',
            'District' => 'required',
            'Population' => 'required',
        ]);
        
        City::create($request->post());

        return redirect()->route('city.index')->with('success','City has been created successfully.');
    }

    public function show(City $city)
    {
        return view('city.show',compact('city'));
    }

    public function edit(City $city)
    {
        $CountryCode = Country::get(['Code', 'Name']);
        return view('city.edit',compact('city','CountryCode'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'Name' => 'required',
            'CountryCode' => 'required',
            'District' => 'required',
            'Population' => 'required',
        ]);
        
        $city->fill($request->post())->save();

        return redirect()->route('city.index')->with('success','City Has Been updated successfully');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('city.index')->with('success','City has been deleted successfully');
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = City::where('Name', 'LIKE', '%' . $query . '%')->orderBy('ID', 'desc')->paginate(10);
                    
            } else {
                $data = City::orderBy('ID','desc')->paginate(10);
            }
             
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $city){
                    $output .= '
                <tr>
                <td>'.$city->ID.'</td>
                <td>'.$city->Name.'</td>
                <td>'.$city->CountryCode.'</td>
                <td>'.$city->District.'</td>
                <td>'.$city->Population.'</td>
                <td>
                    <form action="'.route('city.destroy',$city->ID).'" method="Post">
                        <a class="btn btn-primary"href="'.route('city.edit',$city->ID).'">Edit</a>
                        <input type="hidden" name="_token" value="'.csrf_token().'">
                         <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                
            </tr>
            ';
           }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }

}
