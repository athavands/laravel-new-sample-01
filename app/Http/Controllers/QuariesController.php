<?php

namespace App\Http\Controllers;

use App\Models\Quaries;
use Illuminate\Http\Request;
use Auth;
use DB;
use Redirect;
class QuariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Quaries  $quaries
     * @return \Illuminate\Http\Response
     */
    public function show(Quaries $quaries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quaries  $quaries
     * @return \Illuminate\Http\Response
     */
    public function edit(Quaries $quaries)
    {
        //
    }

    public function acept(Request $request )
    {
        if(isset($request->myTxt)  && Auth::user()->is_admin >0)
        {
            try 
            {
                $query =  Quaries::where('id','=',$request->myTxt)->first(); 

                    DB::statement($query->data);  

                $query->status = "approved";
                $query->save();
              
                return Redirect::to('home');
                
            } catch (Throwable $e) 
            {
                report($e);
        
                return false;
            }
           
        }
        else{
            return Redirect::to('home');
        }
        
    }
    
    public function request(Request $request )
    {
        if($request->status == 1 && isset(Auth::user()->is_admin))
        {
            $query = new Quaries;
            $query->data = $request->myquery;
            $query->status = "pending";
            $query->save();
            // DB::statement(
            // "
            // CREATE TABLE Persons (
            //     PersonID int,
            //     LastName varchar(255),
            //     FirstName varchar(255),
            //     Address varchar(255),
            //     City varchar(255)
            // );
            
            // ");
            return Redirect::to('home');
        }
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quaries  $quaries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quaries $quaries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quaries  $quaries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quaries $quaries)
    {
        //
    }
}
