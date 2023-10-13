<?php
namespace App\Repositories;
use App\Models\Alumno;
use App\Models\Alumnos;

class AlumnoRepository{
    public function obtenerAlumnos()
    {
        return Alumnos::all();
    }
    public function obtenerAlumnoPorld($id)
    {
        return Alumnos::find($id);
    }
    public function insertarAlumno($alumno)
    {
        Alumnos::create([
            'nombre'=>$alumno->nombre,
            'apellido'=>$alumno->apellido,
            'edad'=>$alumno->edad,
            'direccion'=>$alumno->direccion,
        ]);
    }
    public function actualizarAlumno($id,$alumnoActualizar)
    {
        $alumno=Alumnos::find($id);
        $alumno->apellido=$alumnoActualizar->apellido;
        $alumno->edad=$alumnoActualizar->edad;
        $alumno->save();
    }
    public function eliminarAlumno($id)
    {
        $alumno=Alumnos::find($id);
        $alumno->delete();
    }
}

?>