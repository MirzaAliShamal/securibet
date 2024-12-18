<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Bookmarker;
use App\Models\BettingTool;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BettingToolController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.betting_tool.index', get_defined_vars());
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $list = BettingTool::orderBy('id', 'DESC');

            return Datatables::of($list)
                ->editColumn('link', function($row) {
                    return '<a href="'.$row->link.'" target="_blank">Click Here</a>';
                })
                ->addColumn('action', function($row){
                    $html = '';
                    $html .= '
                        <a href="'.route('admin.betting.tool.edit', $row->id).'" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                        <a href="'.route('admin.betting.tool.delete', $row->id).'" class="delete-item"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                    ';
                    return $html;
                })
                ->rawColumns(['link', 'action'])
                ->make(true);
        }
    }

    public function add()
    {
        return view('admin.betting_tool.add', get_defined_vars());
    }

    public function edit(BettingTool $betting)
    {
        return view('admin.betting_tool.edit', get_defined_vars());
    }

    public function save(Request $request)
    {
        $request->validate([
            'logo' => 'required',
            'name' => 'required',
            'link' => 'required',
        ]);

        $data = $request->except('_token', 'logo');
        if ($request->logo) {
            $fileName = Str::random(36).'.'.$request->logo->getClientOriginalExtension();
            $filePath = "logos/{$fileName}";

            Storage::put($filePath , file_get_contents($request->logo));
            $data['logo'] = $filePath;
        }
        $betting = BettingTool::create($data);

        return redirect()->route('admin.betting.tool.index')->with('success', 'Record added successfully');
    }

    public function update(Request $request, BettingTool $betting)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);

        $data = $request->except('_token', 'logo');
        if ($request->logo) {
            $fileName = Str::random(36).'.'.$request->logo->getClientOriginalExtension();
            $filePath = "logos/{$fileName}";

            Storage::put($filePath , file_get_contents($request->logo));
            $data['logo'] = $filePath;
        }

        $betting = $betting->update($data);

        return redirect()->route('admin.betting.tool.index')->with('success', 'Record updated successfully');
    }

    public function delete(BettingTool $betting)
    {
        $betting->delete();
        return redirect()->route('admin.betting.tool.index')->with('success', 'Record deleted successfully');
    }
}
