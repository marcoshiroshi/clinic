<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends BaseController
{

    public function index(Request $request) 
    {
        return view('patient.patient-list', ['patients' => Patient::all()]);
    }

    public function store(Request $request) 
    {
        $data = $request->all();
        unset($data['_token']);

        $model = new Patient;

        $model->create($data);

        return view('patient.patient-list', ['patients' => Patient::all()]);
    }

    public function returnForm()
    {
        return view('patient.patient-form');
    }

    // public function find() 
    // {
    //     return view('patient.patient-show');
    // }

    // public function update() 
    // {
    //     //TODO
    // }

    // public function delete() 
    // {
    //     return view('patient.patient-list');
    // }

    

}