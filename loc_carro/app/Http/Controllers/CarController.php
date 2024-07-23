<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarController extends Controller
{
    public function index() {
        
        $cars = Cars::all();
        return view('welcome', ['cars' => $cars]);
    }

    public function create() {
        return view('cars.create');
    }

    public function store(Request $request) {
        $car = new Cars();
        $car->model = $request->model;
        $car->brand = $request->brand;
        $car->year = $request->year;
        $car->status = $request->status;

        // Image upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/cars'), $imageName);
            $car->image = $imageName;
        }

        $user = auth()->user();

        $car->save();
        return redirect('/dashboard')->with('msg', 'Carro cadastrado com sucesso!');
    }

    public function sample(){
        $car = Cars::all();
        return view('cars.sample', ['cars' => $car]);
    }

    public function show($id) {
        $car = Cars::findOrFail($id);
        return view('cars.show', ['cars' => $car]);
    }
    public function dashboard() {

        $user = auth()->user();

        $cars = Cars::all();

        return view('cars.dashboard', ['cars' => $cars]);
    }

    public function destroy($id) {
        Cars::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Carro excluído com sucesso!');
    }

    public function edit($id) {
        $car = Cars::findOrFail($id);

        return view('cars.edit', ['cars' => $car]);
    }

    public function update(Request $request, $id) {

        $dat = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/cars'), $imageName);
            $dat['image'] = $imageName;
        }

        $car = Cars::findOrFail($id)->update($dat);
        
        return redirect('/dashboard')->with('msg', 'Carro editado com sucesso!');
    }
}
