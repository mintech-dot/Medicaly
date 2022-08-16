<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardappoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ordersUpdate = array();
        $orders = DB::table('orders')->get();
        
        // mengirim data pegawai ke view index
        return view('dashboard', ['orders' => $orders] , ['ordersUpdate' => $ordersUpdate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ordersUpdate = DB::table('orders') ->where('id', $id)->get();
        $orders = DB::table('orders')->get();

        // mengirim data pegawai ke view index
        return view('dashboardappoin', ['ordersUpdate' => $ordersUpdate] , ['orders' => $orders] );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //
        try{
            
            DB::table('orders')->where('id', $request->id)->update([
                'name' => $request->fname,
                'place' => $request->address,
                'p_number' => $request->pnumber,
                'email' => $request->email,
                'worktime' => $request->worktime,
                'description' => $request->description
            ]);
    
            return redirect('/dashboardappoin');
    
            }
    
            catch (\Exception $e) {
                return redirect('/dashboardappoin');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('orders')->where('id', $id)->delete();

        return redirect('/dashboardappoin');
    }
}
