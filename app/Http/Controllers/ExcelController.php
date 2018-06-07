<?php

namespace ipmedt5c\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use ipmedt5c\Platform;

class ExcelController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }


    /*
     *  Check voor file vanuit input met naam "import_file"
     *  Data uitlezen dmv
     */

    public function importExcel(Request $request)
    {
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function ($reader) {})->get();

            if (!empty($data) && $data->count()) {
                foreach ($data->toArray() as $key => $value) {
                    if (!empty($value)) {
                        foreach ($value as $v) {
                            $insertPlatform[] = ['name' => $v['name'],
                                                ['']
                            ];

                        }
                    }
                }

                if(!empty($insert)) {
                    Platform::insert($insertPlatform);
                    return back()->with('success', 'Insert Record successfully');
                }
            }
        }
        return back()->with('error', 'something went wrong');
    }
}
