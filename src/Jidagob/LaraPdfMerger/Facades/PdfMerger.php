<?php namespace Jidagob\LaraPdfMerger\Facades;

use Illuminate\Support\Facades\Facade;

class PdfMerger extends Facade {
	
    protected static function getFacadeAccessor()
    {
        return 'pdf-merger';
    }
} 