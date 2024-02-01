<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function validation($data){  //metodo a parte per la validation
        $validated = Validator::make($data,[    //accetta 3 argomenti dato da validare, primo array con regole e secondo array con messaggi
            'name'=>'required|max:50',
            'description'=>'required|min:20',
            'epoch'=>'required|max:50',
        ],
        [
            'name.required'=>'Requisito Necessario',
            'name.max'=>'Numero caratteri consentiti superato',
            'description.required'=>'Requisito Necessario',
            'description.min'=>'Numero caratteri minimi non raggiunto',
            'epoch.required'=>'Requisito Necessario',
            'epoch.max'=>'Numero caratteri consentiti superato',
        ])->validate();
        return $validated;
    }

    public function index()
    {
        $types = Type::all();
        return view("admin.types.index", compact("types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.types.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $valid_data=$this->validation($data); //questa riga richiama il metodo della f.validation e sost stringa 60 to 83
        $newType = new Type();
        $newType->fill($valid_data); //prende tutti i dati dalla richiesta e li usa per popolare ma prima si validano i dati
        $newType->save();

        return redirect()->route('admin.types.index', $newType->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $types = Type::find($id);
        return view('admin.types.edit', compact("types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $data = $request->except('_token' , '_method');
        $valid_data=$this->validation($data);
        $type = Type::find($id);
        $type->update($valid_data);  
        return redirect()->route('admin.types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //
    }
}
