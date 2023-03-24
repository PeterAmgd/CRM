<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use App\Http\Requests\StoredepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        $no_of_users = $user->count();
        $no_of_deps =department::all()->count();
        if ( $no_of_deps != 0) {
            # code...
            $departments = department::all();
        } else {
            # code...
            $departments = [];
        }


        if (department::all()->count() != 0) {
            # code...
            $user_departments = User::whereBelongsTo($departments)->get();
        } else {
            $user_departments = [];
        }

        $role = role::all();
        //return response()->json(["msg" => $var]);
        // dd($user_department);
        return view('pages.departments', ['users' => $user, 'departments' => $departments, 'roles' => $role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



        department::create([
            'department_name' => $request['add_dep'],

        ]);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usersofdeps = department::find($id)->users;
        $departments = department::all();

        return view('pages.departments', compact('usersofdeps','departments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedepartmentRequest  $request
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $department = department::findorfail($id);

        $department->update([
            'department_name' => $request->department_name,

        ]);
        return redirect()->back();
    }

    public function assignDepartToUser(Request $request, $id ,$dep_ID)
    {
        $user = User::findorfail($id);

        $user->department_id=$dep_ID;
        $user->save();

        return redirect()->back();
    }

    public function removeUserDepart($id)
    {
        $user = User::findorfail($id);
if ($user->department_id !=null) {
    # code...
        $user->department_id=null;
        $user->save();
        return redirect()->route('departments.index');
}

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $dep = department::findorfail($id);
        $user_departments = User::whereBelongsTo($dep)->get();

        // dd($user_department);
        foreach ($user_departments as $user_department) {
            # code...
            $user_department->update([

                'department_id' => $request->department_id,

            ]);
        }
        $dep->delete();
        return redirect()->back();
    }
    public function show_dep_users($id)
    {


           $somes = department::find($id)->users;



        return view('pages.departments', compact('somes'));

    }


}
