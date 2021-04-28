<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends BaseController
{

    public function index(Request $request) 
    {
        return view('doctor.doctor-list', ['doctors' => Doctor::all()]);
    }

    public function store(Request $request) 
    {
        $data = $request->all();
        unset($data['_token']);

        $model = new Doctor;

        $model->create($data);

        return view('doctor.doctor-list', ['doctors' => Doctor::all()]);
    }

    public function returnForm()
    {
        return view('doctor.doctor-form');
    }

}