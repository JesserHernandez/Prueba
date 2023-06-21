<?php

namespace App\Http\Controllers;

use App\Models\Medicationlow;
use Illuminate\Http\Request;

/**
 * Class MedicationlowController
 * @package App\Http\Controllers
 */
class MedicationlowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicationlows = Medicationlow::paginate();

        return view('medicationlow.index', compact('medicationlows'))
            ->with('i', (request()->input('page', 1) - 1) * $medicationlows->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicationlow = new Medicationlow();
        return view('medicationlow.create', compact('medicationlow'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medicationlow::$rules);
        Medicationlow::create($request->all());
        return redirect('/MedicamentosBaja')->with('mensaje', 'OkCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicationlow = Medicationlow::find($id);

        return view('medicationlow.show', compact('medicationlow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicationlow = Medicationlow::find($id);

        return view('medicationlow.edit', compact('medicationlow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medicationlow $medicationlow
     * @return \Illuminate\Http\Response
     */
    public function update(Medicationlow $medicationlow)
    {
        request()->validate(Medicationlow::$rules);
        $Medicationlows = request()->except('_token', '_method');
        Medicationlow::where('Id_MedicationLow','=', $medicationlow)->update($Medicationlows);
        return redirect('/MedicamentosBaja')->with('mensaje', 'OkUpdate');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Medicationlow::find($id)->delete();
        return redirect('/MedicamentosBaja')->with('mensaje', 'OkDelete');
    }
}
