<?php

namespace App\Http\Controllers;

use App\Models\GarageProfile;
use App\Models\User;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class GarageProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicle_types = VehicleType::all();
        return view('auth.garage-profile-reg', ["vehicle_types"=>$vehicle_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'garage_name'=>['required'],
            'garage_mobno'=>['required'],
            'garage_email'=>['required'],
            'location'=>['required'],
            'longtitude'=>['required'],
            'latitude'=>['required'],
            'bio'=>['required'],
        ]);

        $user = User::find(auth()->user()->id);

        $garage_profile = $user->garage_profile()->create($validated);
        $garage_profile->vehicle_types()->attach($request->vehicle_types);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function autocomplete_garage_name (Request $request) {
        $data = GarageProfile::select('garage_name', 'garage_mobno')
                    ->where('garage_name','LIKE',"%{$request->term}%")
                    ->orWhere('garage_mobno','LIKE',"%{$request->term}%")
                    ->pluck('garage_name', 'garage_mobno');

        $values = [];
        foreach ($data as $garage_mobno => $garage_name) {
            array_push($values, $garage_name." | ".$garage_mobno);
        }         

        return response()->json($values);
    }

    public function garge_customer_view ($garage) {
        $exp = explode(' | ', $garage);
        $garage_profile = GarageProfile::where('garage_name', '=', $exp[0])
                                ->where('garage_mobno', '=', $exp[1])->first();

        $vehicle_types = VehicleType::all();
        $garage_profile->update([
            "views" => $garage_profile->views + 1
        ]);
        return view('garage.garage-customer-view', ['garage_profile'=>$garage_profile, "vehicle_types"=>$vehicle_types]);
    }
}
