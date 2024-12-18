<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.users.index', get_defined_vars());
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $list = User::where('role', 'user')->orderBy('id', 'DESC');

            return Datatables::of($list)
                ->addColumn('action', function($row){
                    $html = '';
                    $html .= '
                        <a href="'.route('admin.user.delete', $row->id).'" class="delete-item"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                    ';
                    return $html;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'Record deleted successfully');
    }
}
