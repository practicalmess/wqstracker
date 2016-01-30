<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MedicationsController extends Controller {

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
}

?>