<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\MoneyBet;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoneyBetController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.moneybet.index', get_defined_vars());
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $list = MoneyBet::with('country')->orderBy('id', 'DESC');

            return Datatables::of($list)
                ->addColumn('datetime', function($row) {
                    return $row->date.' '.$row->time;
                })
                ->addColumn('teams', function($row) {
                    $html = '';
                    $html .= '
                        <div class="d-flex align-items-center">
                            <div class="d-flex justify-content-start flex-column">
                                <span>'.$row->team_1.'</span>
                                <span>'.$row->team_2.'</span>
                            </div>
                        </div>
                    ';
                    return $html;
                })
                ->addColumn('country', function($row) {
                    return Str::upper($row->country->name);
                })
                ->editColumn('status', function($row){
                    if ($row->status == 'active') {
                        return '<span class="badge badge-md badge-soft-success">Active</span>';
                    } else if ($row->status == 'disabled') {
                        return '<span class="badge badge-md badge-soft-danger">Disabled</span>';
                    }
                })
                ->editColumn('url', function($row) {
                    return '<a href="'.$row->url.'" target="_blank">Click Here</a>';
                })
                ->addColumn('action', function($row){
                    $html = '';
                    $html .= '
                        <a href="'.route('admin.moneybet.edit', $row->id).'" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                        <a href="'.route('admin.moneybet.delete', $row->id).'" class="delete-item"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                    ';
                    return $html;
                })
                ->rawColumns(['teams', 'status', 'url', 'action'])
                ->make(true);
        }
    }

    public function add()
    {
        return view('admin.moneybet.add', get_defined_vars());
    }

    public function edit(MoneyBet $moneybet)
    {
        return view('admin.moneybet.edit', get_defined_vars());
    }

    public function save(Request $request)
    {
        $request->validate([
            'country_id' => 'required',
            'league' => 'required',
            'total_score' => 'required',
            'date' => 'required',
            'time' => 'required',
            'team_1' => 'required',
            'team_2' => 'required',
            'combine_percentage' => 'required',
            'odds' => 'required',
            'url' => 'required',
            'status' => 'required',
        ]);

        $moneybet = MoneyBet::create($request->except('_token'));

        return redirect()->route('admin.moneybet.index')->with('success', 'Record added successfully');
    }

    public function update(Request $request, MoneyBet $moneybet)
    {
        $request->validate([
            'country_id' => 'required',
            'league' => 'required',
            'total_score' => 'required',
            'date' => 'required',
            'time' => 'required',
            'team_1' => 'required',
            'team_2' => 'required',
            'combine_percentage' => 'required',
            'odds' => 'required',
            'url' => 'required',
            'status' => 'required',
        ]);

        $moneybet = $moneybet->update($request->except('_token'));

        return redirect()->route('admin.moneybet.index')->with('success', 'Record updated successfully');
    }

    public function delete(MoneyBet $moneybet)
    {
        $moneybet->delete();
        return redirect()->route('admin.moneybet.index')->with('success', 'Record deleted successfully');
    }
}
