<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Role;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = DB::table('users')
                 ->join('role_user', 'role_user.user_id','=','users.id')
                 ->join('roles', 'roles.id','=','role_user.role_id')
                 ->orderBy('users.id','DESC')
                 ->select('*')
                 ->paginate(5);

        if (count($users) == 0) {
            $users = User::orderBy('id','DESC')->paginate(5);
        }
                 
        return view('users.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id');
        return view('users.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'password_confirm' => 'required|min:6|same:password',
        ]);

        $role = Role::find($request->input('role'));

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->attachRole($role);
        
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','id');        
        $role = User::find($id)->roles(); 

        
        foreach( $user->roles as $role )
        {
            $selected = $role->id;
        }
        
        return view('users.edit',compact('user'))->with('roles', $roles)->with('selected', $selected);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $role = Role::find($request->input('role')); dd($role);
        $user = User::find($id);

        if (empty($request->input('password'))) {     

            User::find($id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),                
            ]);

        } else {

            User::find($id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

        }

        $user->attachRole($role);

        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}