<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Http\JsonResponse;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
    
            $data = Student::query();
    
            return Datatables::of($data)
			->addIndexColumn()
			->addColumn('action', function($row){

				$btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="View" class="me-1 btn btn-info btn-sm showStudent"><i class="fa-regular fa-eye"></i> View</a>';
				return $btn;
			})
			->rawColumns(['action'])
			->make(true);
        }
          
        return view('students');
    }
}
