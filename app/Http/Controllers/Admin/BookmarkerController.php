<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Bookmarker;
use App\Models\BettingTool;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BookmarkerController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.bookmarker.index', get_defined_vars());
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $list = Bookmarker::orderBy('id', 'DESC');

            return Datatables::of($list)
                ->editColumn('url', function($row) {
                    return '<a href="'.$row->url.'" target="_blank">Click Here</a>';
                })
                ->addColumn('action', function($row){
                    $html = '';
                    $html .= '
                        <a href="'.route('admin.bookmarker.edit', $row->id).'" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                        <a href="'.route('admin.bookmarker.delete', $row->id).'" class="delete-item"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                    ';
                    return $html;
                })
                ->rawColumns(['url', 'action'])
                ->make(true);
        }
    }

    public function add()
    {
        return view('admin.bookmarker.add', get_defined_vars());
    }

    public function edit(Bookmarker $bookmarker)
    {
        return view('admin.bookmarker.edit', get_defined_vars());
    }

    public function save(Request $request)
    {
        $request->validate([
            'logo' => 'required',
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $data = $request->except('_token', 'logo');
        if ($request->logo) {
            $fileName = Str::random(36).'.'.$request->logo->getClientOriginalExtension();
            $filePath = "logos/{$fileName}";

            Storage::put($filePath , file_get_contents($request->logo));
            $data['logo'] = $filePath;
        }
        $bookmarker = Bookmarker::create($data);

        return redirect()->route('admin.bookmarker.index')->with('success', 'Record added successfully');
    }

    public function update(Request $request, Bookmarker $bookmarker)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $data = $request->except('_token', 'logo');
        if ($request->logo) {
            $fileName = Str::random(36).'.'.$request->logo->getClientOriginalExtension();
            $filePath = "logos/{$fileName}";

            Storage::put($filePath , file_get_contents($request->logo));
            $data['logo'] = $filePath;
        }
        $bookmarker = $bookmarker->update($data);

        return redirect()->route('admin.bookmarker.index')->with('success', 'Record updated successfully');
    }

    public function delete(Bookmarker $bookmarker)
    {
        $bookmarker->delete();
        return redirect()->route('admin.bookmarker.index')->with('success', 'Record deleted successfully');
    }
}
