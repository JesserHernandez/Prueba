<?php

namespace App\Http\Controllers;

use App\Models\Typemedicine;
use Illuminate\Http\Request;

/**
 * Class TypemedicineController
 * @package App\Http\Controllers
 */
class TypemedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typemedicines = Typemedicine::paginate();

        return view('typemedicine.index', compact('typemedicines'))
            ->with('i', (request()->input('page', 1) - 1) * $typemedicines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typemedicine = new Typemedicine();
        return view('typemedicine.create', compact('typemedicine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Typemedicine::$rules, Typemedicine::$messages);
        Typemedicine::create($request->all());
        return redirect('/TipoMedicina')->with('mensaje', 'OkCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typemedicine = Typemedicine::find($id);

        return view('typemedicine.show', compact('typemedicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typemedicine = Typemedicine::find($id);

        return view('typemedicine.edit', compact('typemedicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Typemedicine $typemedicine
     * @return \Illuminate\Http\Response
     */
    public function update(Typemedicine $typemedicine)
    {
        request()->validate(Typemedicine::$rules, Typemedicine::$messages);
        $Typemedicines = request()->except('_token', '_method');
        Typemedicine::where('Id_TypeMedicine','=', $typemedicine)->update($Typemedicines);
        return redirect('/TipoMedicina')->with('mensaje', 'OkUpdate');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Typemedicine::find($id)->delete();
        return redirect('/TipoMedicina')->with('mensaje', 'OkDelete');
    }
}
