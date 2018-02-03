<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Support\Facades\Session;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.permission.index')->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
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
            'name' => 'required|alpha_dash|unique:permissions,name',
            'display_name' => 'required|min:5|max:100',
            'description' => 'required|min:5|max:255'
        ]);

        $permission = new Permission;
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();

        Session::flash('new-permission', 'You have successfully created the '. $permission->name . ' permission');
        return redirect()->route('permissions.show', $permission->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::find($id);
        return view('admin/permission/show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin/permission/edit', compact('permission'));
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
            'display_name' => 'required|min:5|max:100',
            'description' => 'required|min:5|max:255'
        ]);

        $permission = Permission::find($id);
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();
        
        Session::flash('update-permission', 'You have successfully updated the '. $permission->name . ' permission');
        return redirect()->route('permissions.show', $id);
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
}
