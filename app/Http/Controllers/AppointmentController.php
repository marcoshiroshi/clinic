<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Status;


class AppointmentController extends BaseController
{

    public function index(Request $request) 
    {
        return view('appointment.appointment-list', ['appointments' => Appointment::with(['patient', 'doctor', 'status'])->get()]);
    }

    public function store(Request $request) 
    {
        $data = $request->all();
        unset($data['_token']);

        $model = new Appointment;

        $model->create($data);

        return view('appointment.appointment-list', ['appointments' => Appointment::all()]);
    }

    public function returnForm()
    {
        return view('appointment.appointment-form', ['patients' => Patient::all(),'doctors' => Doctor::all(),'statuses' => Status::all()]);
    }

}