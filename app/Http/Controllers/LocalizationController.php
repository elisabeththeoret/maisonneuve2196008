<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LocalizationController extends Controller {

    /**
     * @param $locale 
     * @return RedirectResponse 
     */
    public function index($locale) {
        session()->put('locale', $locale);
        
        return redirect()->back();
    }

}
