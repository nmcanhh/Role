<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use DB;
use Log;

class PermissionController extends Controller
{
    private $permission;
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }
    public function index()
    {
        $listPermission = $this->permission->all();
        return view('admin.permission.index', compact('listPermission'));
    }


    public function add()
    {
        return view('admin.permission.add');
    }


    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            $Permission = new Permission;
            $Permission->name = $request->name;
            $Permission->display_name = $request->display_name;
            $Permission->save();
            DB::commit();
            return redirect()->route('admin.permission.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Lỗi: ' .$exception->getMessage() .$exception->getLine());
        }
    }

    public function edit($id)
    {
        $permission = $this->permission->findOrFail($id);
        return view('admin.permission.edit', compact('permission'));
    }


    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $Permission = Permission::find($id);
            $Permission->name = $request->name;
            $Permission->display_name = $request->display_name;
            $Permission->save();
            DB::commit();
            return redirect()->route('admin.permission.index');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            // Xóa Role
            $permission = $this->permission->find($id);
            $permission->delete($id);
            DB::commit();
            return redirect()->route('admin.permission.index');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    public function error()
    {
        return view('admin.error.index');
    }
}
