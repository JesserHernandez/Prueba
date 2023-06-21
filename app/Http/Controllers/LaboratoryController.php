<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use Illuminate\Http\Request;

/**
 * Class LaboratoryController
 * @package App\Http\Controllers
 */
class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratories = Laboratory::paginate();

        return view('laboratory.index', compact('laboratories'))
            ->with('i', (request()->input('page', 1) - 1) * $laboratories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratory = new Laboratory();
        return view('laboratory.create', compact('laboratory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Laboratory::$rules, Laboratory::$messages);
        Laboratory::create($request->all());
        return redirect('/Laboratorios')->with('mensaje', 'OkCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laboratory = Laboratory::find($id);

        return view('laboratory.show', compact('laboratory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratory = Laboratory::find($id);

        return view('laboratory.edit', compact('laboratory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Laboratory $laboratory
     * @return \Illuminate\Http\Response
     */
    public function update(Laboratory $laboratory)
    {
        request()->validate(Laboratory::$rules, Laboratory::$messages);
        $Laboratorys = request()->except('_token', '_method');
        Laboratory::where('Id_Laboratory','=', $laboratory)->update($Laboratorys);
        return redirect('/Laboratorios')->with('mensaje', 'OkUpdate');;
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Laboratory::find($id)->delete();
        return redirect('/Laboratorios')->with('mensaje', 'OkDelete');
    }
}
