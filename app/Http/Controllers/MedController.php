<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MedController extends Controller {

	public function getCheck() {
		return view('med-check');
	}

	public function postResult() {
		return view('meds.med-result');
	}
}

?>