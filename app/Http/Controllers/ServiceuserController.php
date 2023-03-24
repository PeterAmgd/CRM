<?php

namespace App\Http\Controllers;

use App\Models\Serviceuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreServiceuserRequest;
use App\Http\Requests\UpdateServiceuserRequest;

class ServiceuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.ServiceUsers');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Serviceuser::create([

            'home_office_ref'=> $request['addHOR'] ,
            'legal_status'=> $request['addLS'] ,
            'assessment_method'=> $request['addAM'] ,
            'assessor_name'=> $request['addAN'] ,
            'title'=> $request['addTitle'] ,
            'first_name'=> $request['addFN'] ,
            'sur_name'=> $request['addLN'] ,
            'address'=> $request['addFA'] ,
            'phone_number'=> $request['addPhone'] ,
            'postal_code'=> $request['addPC'] ,
            'ethnicity'=> $request['addEthnicity'] ,
            'language'=> $request['addLanguage'] ,
            'is_interpreter_required'=> $request['addISInterpreter'] ,
            'dof'=> $request['addDOF'] ,
            'nino'=> $request['addNINO'] ,
            'gender'=> $request['addGender'] ,
            'marital_status'=> $request['addMS'] ,
            'spouse_in_uk'=> $request['addSpouse'] ,
            'religion'=> $request['addReligion'] ,
            'total_no_in_house'=> $request['addTH'] ,
            'is_agree'=> $request['addAgree'],
            'user_id'=> Auth::user()->id,
        ]);



        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serviceuser  $serviceuser
     * @return \Illuminate\Http\Response
     */
    public function show(Serviceuser $serviceuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serviceuser  $serviceuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Serviceuser $serviceuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceuserRequest  $request
     * @param  \App\Models\Serviceuser  $serviceuser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceuserRequest $request, Serviceuser $serviceuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serviceuser  $serviceuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serviceuser $serviceuser)
    {
        //
    }
}
