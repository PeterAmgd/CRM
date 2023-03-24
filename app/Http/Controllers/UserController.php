<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        /////DONT FORGET HANDLING ERRORS AND CONTROLLERS REQUESTS

        $user = User::all();
        $department = department::all();
        $role = role::all();
        //return response()->json(["msg" => $var]);

        return view('pages.users',['users'=>$user ,'departments'=>$department,'roles'=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    //    Validator::make($request, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
        $user = User::all();
        $department = department::all();
        $role = role::all();


        $create= User::create([
            'name' => $request['addname'],
            'email' => $request['addemail'],
            'password' => Hash::make($request['password']),
            'department_id' => $request['adddepartment_id'],
            'role_id' => $request['addrole_id'],

        ]);


        return redirect()->route('Users');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function getuser($id)
    {
        //

         $user =User::findorfail($id);
         $users = User::all();
         $departments = department::all();
         $roles = role::all();

        //return response()->json(["msg" => $var]);
        // return view('pages.users')->with('user',$user)->with('users',$users)->with('departments',$department)->with('roles',$role);
        // return redirect()->route('getOneUser',$id);
        // return redirect()->route('Users')->compact('one');
        return  view('pages.users',compact('id','users','departments','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $users = User::all();
        $department = department::all();
        $role = role::all();
        $User = User::findorfail($id);

        $User->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'department_id'=>$request->department_id,
            'role_id'=>$request->role_id,
        ]);
// if (isset($User)) {
//     return response()->json(["data"=>$User , "id"=>$User->id]);
// }

            # code...
            return redirect()->route('Users');


}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $one = User::findorfail($id);
        $one->delete();




        return redirect()->route('Users');
    }
}
