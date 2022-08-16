<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Services\PayUService\Exception;

class JoinusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('process');

    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            // insert data 
        DB::table('joinus')->insert([
            'name' => $request->fname,
            'place' => $request->address,
            'p_number' => $request->pnumber,
            'email' => $request->email,
            'worktime' => $request->worktime,
            'description' => $request->description
        ]);
        // redirect 

        return redirect('/process');
        }
       
        catch (\Exception $e) {

       }

    }

    
}
