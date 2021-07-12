<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Resources\PersonResource;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PersonResource::collection(Person::with('address')->with('companies')->with('cars')->get());
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
    public function show($count)
    {
      if ($count >= 0){
        return PersonResource::collection(Person::with('address')->with('companies')->with('cars')->take($count)->get());
      }
      else abort(404);
        //return new PersonResource(Person::findOrFail($id));
    }


    public function person($name) {
      return PersonResource::collection(Person::with('address')->with('companies')->with('cars')->where('name', $name)->get());
    }

    public function countRecords() {
      return Person::count();
    }

    public function rich() {
      $average = (int)Person::sum('salary')/Person::count();
      return PersonResource::collection(Person::with('address')->with('companies')->with('cars')->havingRaw('salary >'.$average)->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
