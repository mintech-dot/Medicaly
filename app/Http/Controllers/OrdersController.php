<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Services\PayUService\Exception;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('done');
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
        DB::table('orders')->insert([
            'full_name' => $request->fname,
            'address' => $request->address,
            'p_number' => $request->pnumber,
            'med' => $request->med,
            'date' => $request->date,
        ]);
        // redirect 

        return redirect('/done');
        }

        catch (\Exception $e) {

        }
        
    }

   
}
