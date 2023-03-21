<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registro;

class RegistrosController extends Controller
{
    public function index(){
        $registros = Registro::all();
        return view('registros.index',compact($registros)); 
    }

    public function store(Request $request){
        //dd($request->all());
        $registro = new Registro();
        $registro->pain = $this->getBooleanValue($request->pain);
        $registro->pain_level = $this->validatePainLevel($request->painLevel,$this->getBooleanValue($request->pain));
        $registro->medicines = $this->getBooleanValue($request->medicine);
        $registro->medicines_name = $this->getMedicineValue($request->medicineName);
        $registro->menstruation = $this->getBooleanValue($request->menstruation);
        $registro->user_id = Auth::id();
        
        $registro->save();
    }

    public function getBooleanValue($value){
        if($value == 'si'){
            return 1;
        }else if($value == 'no'){
            return 0;
        }else{
            return abort(403,'Error en datos de entrada');
        }
    }

    public function getMedicineValue($value){
        if(isset($value)){
            return $value;
        }else{
            return 'Sin medicinas';
        }
    }

    public function validatePainLevel($value, $pain){
        if($pain == 0){
            return 0;
        }else{
            return $value;
        }
    }
}
