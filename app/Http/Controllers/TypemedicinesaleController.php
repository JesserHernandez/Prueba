<?php

namespace App\Http\Controllers;

use App\Models\Typemedicinesale;
use Illuminate\Http\Request;

/**
 * Class TypemedicinesaleController
 * @package App\Http\Controllers
 */
class TypemedicinesaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typemedicinesales = Typemedicinesale::paginate();

        return view('typemedicinesale.index', compact('typemedicinesales'))
            ->with('i', (request()->input('page', 1) - 1) * $typemedicinesales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typemedicinesale = new Typemedicinesale();
        return view('typemedicinesale.create', compact('typemedicinesale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Typemedicinesale::$rules, Typemedicinesale::$messages);
        Typemedicinesale::create($request->all());
        return redirect('/TipoMedicinaVenta')->with('mensaje', 'OkCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typemedicinesale = Typemedicinesale::find($id);

        return view('typemedicinesale.show', compact('typemedicinesale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typemedicinesale = Typemedicinesale::find($id);

        return view('typemedicinesale.edit', compact('typemedicinesale'));
    }

    /**
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Typemedicinesale $typemedicinesale
     * @return \Illuminate\Http\Response
     */
    public function update(Typemedicinesale $typemedicinesale)
    {
        request()->validate(Typemedicinesale::$rules, Typemedicinesale::$messages);
        $Typemedicinesales = request()->except('_token', '_method');
        Typemedicinesale::where('Id_TypemMedicineSale','=', $typemedicinesale)->update($Typemedicinesales);
        return redirect('/TipoMedicinaVenta')->with('mensaje', 'OkUpdate');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Typemedicinesale::find($id)->delete();
        return redirect('/TipoMedicinaVenta')->with('mensaje', 'OkDelete');
    }
}
