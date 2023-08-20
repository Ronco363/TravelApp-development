<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }

    public function fetchAll() {
        $employee = Trip::all();
        $output = '';
        if ($employee->count() > 0) {
            $output .= '<table class="table table-striped align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Immagine</th>
                <th>Nome</th>
                <th>Tipologia</th>
                <th>Durata</th>
                <th>Distanza</th>
                <th>Altitudine</th>
                <th>Guida</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($employee as $rs) {
                $output .= '<tr>
                <td>' . $rs->id . '</td>
                <td><img src="storage/images/' . $rs->immagine . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $rs->nome . '</td>
                <td>' . $rs->tipologia . '</td>
                <td>' . $rs->durata . '</td>
                <td>' . $rs->distanza . '</td>
                <td>' . $rs->altitudine . '</td>
                <td>' . $rs->guida . '</td>
                <td>
                  <a href="#" id="' . $rs->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>
                  <a href="#" id="' . $rs->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record in the database!</h1>';
        }
    }

    // insert a new employee ajax request
    public function store(Request $request) {
        $file = $request->file('immagine');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName); //php artisan storage:link

        $empData = ['nome' => $request->nome, 'tipologia' => $request->tipologia, 'durata' => $request->durata, 'distanza' => $request->distanza, 'altitudine' => $request->altitudine, 'guida' => $request->guida,'immagine' => $fileName];
        Trip::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // edit an employee ajax request
    public function edit(Request $request) {
        $id = $request->id;
        $emp = Trip::find($id);
        return response()->json($emp);
    }

    // update an employee ajax request
    public function update(Request $request) {
        $fileName = '';
        $emp = Trip::find($request->emp_id);
        if ($request->hasFile('immagine')) {
            $file = $request->file('immagine');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($emp->immagine) {
                Storage::delete('public/images/' . $emp->immagine);
            }
        } else {
            $fileName = $request->emp_avatar;
        }

        $empData = ['nome' => $request->nome, 'tipologia' => $request->tipologia, 'durata' => $request->durata, 'distanza' => $request->distanza, 'altitudine' => $request->altitudine, 'guida' => $request->guida, 'immagine' => $fileName];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // delete an employee ajax request
    public function delete(Request $request) {
        $id = $request->id;
        $emp = Trip::find($id);
        if (Storage::delete('public/images/' . $emp->immagine)) {
            Trip::destroy($id);
        }
    }
}