<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use App\Repositories\AlumnoRepository;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $alumnos;
    public function __construct(AlumnoRepository $alumnos)
    {
    $this->alumnos = $alumnos;
    }
    public function index()
    {
        //
        $alumnos = $this->alumnos->obtenerAlumnos();
return view('alumnos.lista', ['alumnos' => $alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('alumnos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $this->alumnos->insertarAlumno($request);
    return redirect()->action([AlumnoController::class, 'index']);
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    $alumno = $this->alumnos->obtenerAlumnoPorld($id);
    return view('alumnos.ver', ['alumno' => $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
$alumno = $this->alumnos->obtenerAlumnoPorld($id);
return view('alumnos.editar', ['alumno' => $alumno]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $this->alumnos->actualizarAlumno($request, $id);
    return redirect()->action([AlumnoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $this->alumnos->eliminarAlumno($id);
    return redirect()->action([AlumnoController::class, 'index']);
    }
}
