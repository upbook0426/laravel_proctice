<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
    	$searchForm = $this->form(StaffSearchForm::class, ['method'=>'GET'], request()->query());
		$staffAllForm = $this->form(StaffAllForm::class);
		$staffColumnForm = $this->form(StaffColumnForm::class);
		$records = Staff::paginate();
        if( $records->currentPage() > 1 && $records->isEmpty() ){
            return redirect( url()->current() );
        }

		return view('staff.index', compact('searchForm', 'staffAllForm', 'staffColumnForm', 'records'));
	}

}
