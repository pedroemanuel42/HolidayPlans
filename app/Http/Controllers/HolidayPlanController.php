<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HolidayPlan;
use Barryvdh\DomPDF\Facade\Pdf;
use Throwable;

class HolidayPlanController extends Controller
{
    public function index()
    {
        return response()->json(HolidayPlan::all());
    }

    public function show($id)
    {
        $holidayPlan = HolidayPlan::find($id);

        if (!$holidayPlan) {
            return response()->json(['message' => 'Holiday plan not found'], 404);
        }

        return response()->json($holidayPlan->only('title', 'description', 'location', 'participants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date_format:Y-m-d',
            'location' => 'required|string',
            'participants' => 'nullable|string',
        ]);

        $holidayPlan = HolidayPlan::create($request->all());

        return response()->json(['message' => 'Holiday plan created with success! ID: #' . $holidayPlan->id,]);
    }

    public function update(Request $request, $id)
    {
        $holidayPlan = HolidayPlan::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'date' => 'nullable|date_format:Y-m-d',
            'location' => 'nullable|string',
            'participants' => 'nullable|string',
        ]);

        $fillableFields = $holidayPlan->getFillable();

        foreach ($fillableFields as $field) {
            if ($request->filled($field)) {
                $holidayPlan->$field = $request->input($field);
            }
        }

        $holidayPlan->save();

        return response()->json(['message' => 'Holiday plan updated with success! ID: #' . $holidayPlan->id,]);
    }

    public function destroy($id)
    {
        $holidayPlan = HolidayPlan::find($id);

        if (!$holidayPlan) {
            return response()->json(['message' => 'Can not remove this holiday plan. It does not exists.'], 404);
        }

        $holidayPlan->delete();

        return response()->json(['message' => 'Holiday plan removed with success! ID: #' . $id,]);
    }

    public function generatePDF($id)
    {
        $holidayPlan = HolidayPlan::findOrFail($id);

        if (!$holidayPlan) {
            return response()->json(['message' => 'Holiday plan not found'], 404);
        }

        $pdf = PDF::loadView('holiday-plan-pdf', compact('holidayPlan'));

        return $pdf->download('holiday-plan.pdf');
    }
}
