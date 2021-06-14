<?php

namespace App\Http\Controllers;


use App\Models\Credits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        $credits= Credits::paginate(15);
        return view('credit.index',compact('credits'));
        
    }

    public function search(Request $request)
    {   
       
        
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
     * @param  \App\Models\Credits  $credits
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        
        $clientId=trim($request->get('Client_Id'));
        $client=Credits::where('Client_Id',"$clientId")->get();
        return view('credit.client',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Credits  $credits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credits $credits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Credits  $credits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credits $credits)
    {
        //
    }
}
