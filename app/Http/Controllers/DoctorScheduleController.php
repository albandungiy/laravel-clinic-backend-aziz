<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DoctorSchedule;
use App\Models\Doctor;

class DoctorScheduleController extends Controller
{
    //index schedule
    public function index(Request $request)
    {

        $doctorSchedules = DoctorSchedule::with('doctor')
            ->when($request->input('doctor_id'), function ($query, $doctor_id) {
                return $query->where('doctor_id', 'like', '%' . $doctor_id . '%');
            })
            // sort by doctor name
            ->orderBy('doctor_id', 'asc')
            ->paginate(10);

        return view('pages.doctors_schedule.index', compact('doctorSchedules'));
    }

    // create schedule
    public function create(Request $request)
    {
        $doctors = Doctor::all();
        return view('pages.doctors_schedule.create', compact('doctors'));
    }
    // store schedule
    public function store(Request $request)
    {

        $request->validate([
            'doctor_id' => 'required',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $doctorSchedule = new DoctorSchedule();
        $doctorSchedule->doctor_id = $request->doctor_id;
        $doctorSchedule->day = $request->day;
        $doctorSchedule->start_time = $request->start_time;
        $doctorSchedule->end_time = $request->end_time;

        $doctorSchedule->save();
        return redirect()->route('doctors_schedule.index')->with('success', 'Doctor Schedule created successfully.');

    }

    // edit schedule
    public function edit($id)
    {
        $doctorSchedule = DoctorSchedule::find($id);
        $doctors = Doctor::all();
        return view('pages.doctors_schedule.edit', compact('doctorSchedule', 'doctors'));
    }

    // update schedule
    public function update(Request $request, $id)
    {

        $request->validate([
            'doctor_id' => 'required',
            'day' => 'required',
            'time' => 'required',
            'note' => 'required',
        ]);

        $doctorSchedule = DoctorSchedule::find($id);
        $doctorSchedule->doctor_id = $request->doctor_id;
        $doctorSchedule->day = $request->day;
        $doctorSchedule->time = $request->time;
        $doctorSchedule->status = $request->status;
        $doctorSchedule->note = $request->note;

        $doctorSchedule->save();

        return redirect()->route('doctors_schedule.index')->with('success', 'Doctor Schedule updated successfully.');
    }

    // destroy schedule
    public function destroy($id)
    {
        $doctorSchedule = DoctorSchedule::find($id);
        $doctorSchedule->delete();
        return redirect()->route('doctors_schedule.index')->with('success', 'Doctor Schedule deleted successfully.');
    }

}
