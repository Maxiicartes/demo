<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suscripcion;
use Barryvdh\DomPDF\Facade\Pdf;

class SuscripcionController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $suscripciones = Suscripcion::all();
        return view('suscripcion.index', compact('suscripciones'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('suscripcion.create');
    }

    // Guardar un nuevo registro
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'version' => 'required',
            'fecha_instalacion' => 'required|date',
            'fecha_ultima_actualizacion' => 'required|date',
            'fecha_expiracion' => 'required|date',
            'responsable' => 'required',
            'unidad' => 'required',
        ]);

        Suscripcion::create($request->all());

        return redirect()->route('suscripcion.index')->with('success', 'Suscripción creada exitosamente.');
    }

    // Mostrar un registro específico
    public function show($id)
    {
        $suscripcion = Suscripcion::find($id);
        return view('suscripcion.show', compact('suscripcion'));
    }

    public function showSuscripcion($id)
    {
        $suscripcion = Suscripcion::find($id);
        return view('suscripcion.showObservador', compact('suscripcion'));
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $suscripcion = Suscripcion::find($id);
        return view('suscripcion.edit', compact('suscripcion'));
    }

    // Actualizar un registro específico
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'version' => 'required',
            'fecha_instalacion' => 'required|date',
            'fecha_ultima_actualizacion' => 'required|date',
            'fecha_expiracion' => 'required|date',
            'responsable' => 'required',
            'unidad' => 'required',
        ]);

        $suscripcion = Suscripcion::find($id);
        $suscripcion->update($request->all());

        return redirect()->route('suscripcion.index')->with('success', 'Suscripción actualizada exitosamente.');
    }

    // Eliminar un registro específico
    public function destroy($id)
    {
        $suscripcion = Suscripcion::find($id);
        $suscripcion->delete();

        return redirect()->route('suscripcion.index')->with('success', 'Suscripción eliminada exitosamente.');
    }

    public function mostrarPDF($id)
    {

        $suscripcion = Suscripcion::find($id);

        $pdf = Pdf::loadView('suscripcion.pdf', compact('suscripcion'));

        return $pdf->stream();

    }
}
