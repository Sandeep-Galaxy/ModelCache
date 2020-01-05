<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelCacheController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
 
        $view = view('welcome');
 
        $companies = \App\Company::get();
 
        $view->with('companies',$companies);
 
        return $view;
    }
}
