<?php

namespace App\Http\Controllers;
use App\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function allName(){
        return response()->json(Name::all(), 200);
    }

    public function nameById($id){
        $name = Name::find($id);
        if (is_null($name)) {
            return response()->json(['message'=>'Name Not Found'], 404);
        }

        return response()->json($name, 200);
    }

    public function addName(Request $request){
        $name = new Name;
        $name->first = $request->first;
        $name->last = $request->last;
        $success = $name->save();
        if (!$success) {
            return response()->json('Error', 500);
        }

        return response()->json('Beliau Ini Kocak Geming ygy', 201);
    }

    public function updateName(Request $request, $id){
        $name = Name::find($id);
        $name->first = $request->first;
        $name->last = $request->last;
        $success = $name->save();
        if (!$success) {
            return response()->json('Error', 500);
        }

        return response()->json('Yakin Dick?', 201);
    }

    public function delete($id){
        $name = Name::find($id);
        if (is_null($name)) {
            return response()->json('Error', 404);
        }

        $success = $name->delete();

        if (!$success) {
            return response()->json('Error', 500);
        }

        return response()->json('Adick-Adick Ter Kedick-Kedick', 201);
    }
}
