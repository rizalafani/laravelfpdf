<?php

namespace rizalafani\fpdflaravel;

use Illuminate\Support\Facades\Facade;

class FpdfFacade extends Facade{
	protected static function getFacadeAccessor() { return 'fpdf'; }
}
