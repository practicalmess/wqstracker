<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MedicationsController extends Controller {

	//Corey
	public function getCheck() {
		$meds = \WQS\Medication::all();

		foreach($meds as $med) {
			$taken = Carbon::parse($med->last_taken);
			if ($med->interval < Carbon::now()->diffInHours($taken))
				$med->can_take = 1;
			Carbon::setToStringFormat('g:i a');
			$med->next = $taken->addHours($med->interval);
		}


		return view('med-check')->with('meds', $meds);
	}

	public function postTaken(Request $request) {
		$med = \WQS\Medication::find($request->id);

		$med->last_taken = Carbon::now();
		$med->save();

		return view('med-taken')->with('med', $med);
	}

	//Me
	public function getChange() {
		$meds = \WQS\Medication::all();
		return view('change');
	}

	public function getAdd() {
		return view('add');
	}

	public function postChange(Request $request) {
		$med = new \WQS\Medication();
		$med->med_name = $request->med_name;
		$med->interval = $request->interval;

		$med->save();
		return redirect('/change');
	}

	public function getDelete() {
		$meds = \WQS\Medication::all();
		return view('delete')->with('meds', $meds);
	}

	public function postDeleted(Request $request) {
		$med = \WQS\Medication::find($request->id);
		$med->delete();

		return view('deleted');
	}

	public function getChangeTaken() {
		$meds = \WQS\Medication::all();
		return view('change_taken')->with('meds', $meds);
	}

	public function postChangedTaken(Request $request) {
		$med = \WQS\Medication::find($request->id);
		$med->last_taken = Carbon::createFromFormat('g:i a', $request->last_taken);

		$med->save();

		return redirect('/change');
	}
}

?>