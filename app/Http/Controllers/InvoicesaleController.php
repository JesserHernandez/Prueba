<?php

namespace App\Http\Controllers;

use App\Models\Invoicesale;
use Illuminate\Http\Request;

/**
 * Class InvoicesaleController
 * @package App\Http\Controllers
 */
class InvoicesaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoicesales = Invoicesale::paginate();

        return view('invoicesale.index', compact('invoicesales'))
            ->with('i', (request()->input('page', 1) - 1) * $invoicesales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $invoicesale = new Invoicesale();
        return view('invoicesale.create', compact('invoicesale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Invoicesale::$rules);
        Invoicesale::create($request->all());
        return redirect('/Facturas')->with('mensaje', 'OkCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoicesale = Invoicesale::find($id);

        return view('invoicesale.show', compact('invoicesale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoicesale = Invoicesale::find($id);

        return view('invoicesale.edit', compact('invoicesale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Invoicesale $invoicesale
     * @return \Illuminate\Http\Response
     */
    public function update(Invoicesale $invoicesale)
    {
        request()->validate(Invoicesale::$rules);
        $invoicesales = request()->except('_token', '_method');
        Invoicesale::where('Id_InvoiceSale','=', $invoicesale)->update($invoicesales);
        return redirect('/Facturas')->with('mensaje', 'OkUpdate');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Invoicesale::find($id)->delete();
        return redirect('/Facturas')->with('mensaje', 'OkDelete');
    }
}
