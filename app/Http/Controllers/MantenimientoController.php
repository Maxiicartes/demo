<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use App\Models\Mantenciones;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class MantenimientoController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $mantenimientos = Mantenimiento::all();
        return view('mantenimiento.index', compact('mantenimientos'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('mantenimiento.create');
    }

    // Guardar un nuevo registro
    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'foto_antes' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_despues' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'motivo' => 'required',
            'fecha_ultima_actualizacion' => 'required|date',
            'fecha_mantenimiento' => 'required|date',
            'responsable' => 'required',
            'unidad' => 'required',
            'tecnico_nombre' => 'required',
            'tecnico_rut' => 'required',
            'empresa' => 'required',
            'tipo_visita' => 'required',
        ]);

        // Procesar las imágenes antes de guardar
        $foto_antesPath = null;
        $foto_despuesPath = null;

        if ($request->hasFile('foto_antes')) {
            $foto_antesPath = $request->file('foto_antes')->store('mantenimientos');
            Storage::move($foto_antesPath, 'public/mantenimientos/' . basename($foto_antesPath));
        }

        if ($request->hasFile('foto_despues')) {
            $foto_despuesPath = $request->file('foto_despues')->store('mantenimientos');
            Storage::move($foto_despuesPath, 'public/mantenimientos/' . basename($foto_despuesPath));
        }

        // Guardar el registro en la base de datos
        Mantenimiento::create([
            'nombre_producto' => $request->nombre_producto,
            'foto_antes' => $foto_antesPath,
            'foto_despues' => $foto_despuesPath,
            'motivo' => $request->motivo,
            'fecha_ultima_actualizacion' => $request->fecha_ultima_actualizacion,
            'fecha_mantenimiento' => $request->fecha_mantenimiento,
            'responsable' => $request->responsable,
            'unidad' => $request->unidad,
            'tecnico_nombre' => $request->tecnico_nombre,
            'tecnico_rut' => $request->tecnico_rut,
            'empresa' => $request->empresa,
            'tipo_visita' => $request->tipo_visita,
        ]);

        return redirect()->route('mantenimiento.index')->with('success', 'Registro de mantenimiento creado exitosamente.');
    }

    // Mostrar un registro específico
    public function show($id)
    {
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimiento.show', compact('mantenimiento'));
    }

    public function showMantenimiento($id)
    {
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimiento.showObservador', compact('mantenimiento'));
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimiento.edit', compact('mantenimiento'));
    }

    // Actualizar un registro específico
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'motivo' => 'required',
            'fecha_ultima_actualizacion' => 'required|date',
            'fecha_mantenimiento' => 'required|date',
            'responsable' => 'required',
            'unidad' => 'required',
            'tecnico_nombre' => 'required',
            'tecnico_rut' => 'required',
            'empresa' => 'required',
            'tipo_visita' => 'required',
        ]);

        $mantenimiento = Mantenimiento::find($id);

        // Actualizar imágenes si se han proporcionado nuevas
        if ($request->hasFile('foto_antes')) {
            // Eliminar la imagen anterior si existe
            if ($mantenimiento->foto_antes) {
                Storage::delete($mantenimiento->foto_antes);
            }
            // Guardar la nueva imagen
            $mantenimiento->foto_antes = $request->file('foto_antes')->store('mantenimientos');
        }

        if ($request->hasFile('foto_despues')) {
            // Eliminar la imagen anterior si existe
            if ($mantenimiento->foto_despues) {
                Storage::delete($mantenimiento->foto_despues);
            }
            // Guardar la nueva imagen
            $mantenimiento->foto_despues = $request->file('foto_despues')->store('mantenimientos');
        }

        // Actualizar los otros campos
        $mantenimiento->nombre_producto = $request->nombre_producto;
        $mantenimiento->motivo = $request->motivo;
        $mantenimiento->fecha_ultima_actualizacion = $request->fecha_ultima_actualizacion;
        $mantenimiento->fecha_mantenimiento = $request->fecha_mantenimiento;
        $mantenimiento->responsable = $request->responsable;
        $mantenimiento->unidad = $request->unidad;
        $mantenimiento->tecnico_nombre = $request->tecnico_nombre;
        $mantenimiento->tecnico_rut = $request->tecnico_rut;
        $mantenimiento->empresa = $request->empresa;
        $mantenimiento->tipo_visita = $request->tipo_visita;

        $mantenimiento->save();

        return redirect()->route('mantenimiento.index')->with('success', 'Registro de mantenimiento actualizado exitosamente.');
    }

    // Eliminar un registro específico
    public function destroy($id)
    {
        $mantenimiento = Mantenimiento::find($id);

        // Eliminar las imágenes asociadas si existen
        if ($mantenimiento->foto_antes) {
            Storage::delete($mantenimiento->foto_antes);
        }
        if ($mantenimiento->foto_despues) {
            Storage::delete($mantenimiento->foto_despues);
        }

        $mantenimiento->delete();

        return redirect()->route('mantenimiento.index')->with('success', 'Registro de mantenimiento eliminado exitosamente.');
    }


    public function mostrarPDF($id)
    {

        $mantenimiento = Mantenimiento::find($id);

        $pdf = Pdf::loadView('mantenimiento.pdf', compact('mantenimiento'));

        return $pdf->stream();

    }
}
