<?php

namespace ipmedt5c\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use ipmedt5c\Platform;

class ExcelController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }

    public function importExcel()
    {
        if (Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $insert[] = ['name' => $value->name, 'name_slug' => $value->name_slug, 'brand' => $value->brand];
                }
                if(!empty($insert)) {
                    DB::table('platforms')->insert($insert);
                    dd('Insert Record successfully');
                }
            }
        }
        return back();
    }
}
