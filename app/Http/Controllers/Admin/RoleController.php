<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\Permission;
use DB;
use Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.role.index')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.role.create', compact('permissions'));
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
            'name' => 'required|min:3|max:15|unique:roles,name',
            'display_name' => 'required|min:5|max:30',
            'description' => 'required|min:5|max:255'
        ]);

       //$role=Role::create($request->except(['permissions', '_token']));
        $role = new Role;
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();

       if ($request->permissions) {
           $role->attachPermissions($request->permissions);
       }

       Session::flash('new-role', 'You have successfully created the '. $role->name . ' role');
       return redirect()->route('roles.show', $role->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        return view('admin.role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::where('id', $id)->with('permissions')->first();
        $permissions = Permission::all();
        $role_permissions = $role->permissions()->pluck('id','id')->toArray();
        return view('admin.role.edit', compact('role', 'permissions', 'role_permissions'));
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
            'display_name' => 'required|min:5|max:30',
            'description' => 'required|min:5|max:255'
        ]);

        $role = Role::find($id);
        $role->display_name = $request->display_name;
        $role->description = $request->description;
        $role->save();

        DB::table('permission_role')->where('role_id',$id)->delete(); // Delete the permission relationships first and then save

        if ($request->permissions) {
           $role->attachPermissions($request->permissions);
        }
        
        Session::flash('update-role', 'You have successfully created the '. $role->name . ' role');
        return redirect()->route('roles.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id); // Pull back a given role
        // Regular Delete
        $role->delete(); // This will work no matter what

        return redirect()->route('roles.index');
    }
}
