<?php

/*
* An example of a RESTful api controller
*
* Don't forget to check out App\Http\Middleware\VerifyCsrfToken where we white list our /hero url
*/

namespace Examples\Http\Controllers;

use Examples\Hero;
use Examples\Http\Controllers\Controller;
use Examples\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HeroController extends Controller
{
    /**
     * Get a list of Heroes, using RESTful GET collection
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        * Retrieve all heroes using pagination
        */
        return Hero::paginate();

    }

    /**
     * Create a new hero using RESTful POST collection
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create a new hero
        $hero              = new Hero($request->all());
        $hero->save();

        return $hero;
    }

    /**
     * Get an individual hero using RESTful GET entity
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Hero::find($id);
    }

    /**
     * Update a hero using RESTful PATCH entity
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hero              = Hero::find($id);
        $hero->name        = empty($request->name)        ? $hero->name        : $request->name;
        $hero->description = empty($request->description) ? $hero->description : $request->description;
        $hero->weapon      = empty($request->weapon)      ? $hero->weapon      : $request->weapon;
        $hero->save();

        return response()->json($hero);
    }

    /**
     * Delete a hero using RESTful DELETE entity
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hero = Hero::find($id);
        $hero->delete();

        return response()->json($hero);
    }
}
