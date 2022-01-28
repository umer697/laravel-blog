<?php
namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleRequest;
use App\Http\Requests\Role\AssignPermission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('backpanel.roles.index',compact('roles'));//->with('roles', Role::all())
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpanel.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = new Role();
        $role->name =$request->name;
        $role->save();
        return redirect()->route('role.index')->with('success','Role Added Successfully');
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
    public function edit(Role $role)
    {

        return view('backpanel.roles.edit')->with('role',$role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->name =$request->name;
        $role->save();
        return redirect()
        ->route('role.index')
        ->with('success',$role->name .' Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
       $role->delete();
        return redirect()
        ->route('role.index')
        ->with('success',$role->name .' Role Deleted Successfully');

    }
    public function assignPermissionView(Role $role) {
        $permissions = Permission::all();
        return  view(
            'backpanel.roles.assignPermission',
             compact(['role','permissions']));
    }

    public function assignPermission(AssignPermission $request , Role $role) {
        $role->syncPermissions($request->permission);
        return back()->with('success','Permission has been Assigned Successfully');
    }

}
