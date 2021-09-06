<?php

namespace App\Http\Controllers;
use App\Empleado;
use Illuminate\Http\Request;


class EmpleadosController extends Controller
{
    public function vista(){
        return view('AgregarEmpleado');
    }
    //
    public function create(Request $request){
        $empleado = new Empleado();
        $empleado -> codigo = $request -> codigo;
        $empleado -> nombres = $request -> nombres;
        $empleado -> apellidos = $request -> apellidos;
        $empleado -> direccion = $request -> direccion;
        $empleado -> telefono = $request -> telefono;
        $empleado -> fecha_nacimiento = $request -> fecha_nacimiento;
        $empleado -> id_puesto = $request -> id_puesto;
        $empleado -> save();

        return redirect('/create');
    }
}
