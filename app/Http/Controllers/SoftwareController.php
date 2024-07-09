<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Software;
use Barryvdh\DomPDF\Facade\Pdf;

class SoftwareController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $softwares = Software::all();
        return view('software.index', compact('softwares'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('software.create');
    }

    // Guardar un nuevo registro
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'version' => 'required',
            'fecha_instalacion' => 'required|date',
            'fecha_ultima_actualizacion' => 'required|date',
            'responsable' => 'required',
            'unidad' => 'required',
        ]);

        Software::create($request->all());

        return redirect()->route('software.index')->with('success', 'Software creado exitosamente.');
    }

    // Mostrar un registro específico
    public function show($id)
    {
        $software = Software::find($id);
        return view('software.show', compact('software'));
    }

    public function showSoftware($id)
    {
        $software = Software::find($id);
        return view('software.showObservador', compact('software'));
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $software = Software::find($id);
        return view('software.edit', compact('software'));
    }

    // Actualizar un registro específico
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'version' => 'required',
            'fecha_instalacion' => 'required|date',
            'fecha_ultima_actualizacion' => 'required|date',
            'responsable' => 'required',
            'unidad' => 'required',
        ]);

        $software = Software::find($id);
        $software->update($request->all());

        return redirect()->route('software.index')->with('success', 'Software actualizado exitosamente.');
    }

    // Eliminar un registro específico
    public function destroy($id)
    {
        $software = Software::find($id);
        $software->delete();

        return redirect()->route('software.index')->with('success', 'Software eliminado exitosamente.');
    }

    public function mostrarPDF($id)
    {

        $software = Software::find($id);

        $pdf = Pdf::loadView('software.pdf', compact('software'));

        return $pdf->stream();

    }
}
