<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

/**
 * Class MedicineController
 * @package App\Http\Controllers
 */
class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::paginate();

        return view('medicine.index', compact('medicines'))
            ->with('i', (request()->input('page', 1) - 1) * $medicines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicine = new Medicine();
        return view('medicine.create', compact('medicine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Medicine::$rules, Medicine::$messages);
        Medicine::create($request->all());
        return redirect('/Medicamentos')->with('mensaje', 'OkCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine = Medicine::find($id);

        return view('medicine.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicine::find($id);

        return view('medicine.edit', compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Medicine $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Medicine $medicine)
    {
        request()->validate(Medicine::$rules, Medicine::$messages);
        $Medicines = request()->except('_token', '_method');
        Medicine::where('Id_Medicine','=', $medicine)->update($Medicines);
        return redirect('/Medicamentos')->with('mensaje', 'OkUpdate');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Medicine::find($id)->delete();
        return redirect('/Medicamentos')->with('mensaje', 'OkDelete');
    }
}
