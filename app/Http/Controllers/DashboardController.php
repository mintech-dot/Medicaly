<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Services\PayUService\Exception;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $joinusUpdate = array();
        $joinus = DB::table('joinus')->get();
        
        // mengirim data pegawai ke view index
        return view('dashboard', ['joinus' => $joinus] , ['joinusUpdate' => $joinusUpdate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $joinus = DB::table('joinus')->where('confirmation', '=', 'on')->get();
        return view('welcome' , compact('joinus'));
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
        $joinusUpdate = DB::table('joinus') ->where('id', $id)->get();
        $joinus = DB::table('joinus')->get();

        // mengirim data pegawai ke view index
        return view('dashboard', ['joinusUpdate' => $joinusUpdate] , ['joinus' => $joinus] );

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
            
            DB::table('joinus')->where('id', $request->id)->update([
                'name' => $request->fname,
                'place' => $request->address,
                'p_number' => $request->pnumber,
                'email' => $request->email,
                'worktime' => $request->worktime,
                'description' => $request->description,
                'confirmation' => $request->isactive
            ]);
    
            return redirect('/dashboard');
    
            }
    
            catch (\Exception $e) {
                return redirect('/dashboard');
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
        DB::table('joinus')->where('id', $id)->delete();

        return redirect('/dashboard');
    }
}
