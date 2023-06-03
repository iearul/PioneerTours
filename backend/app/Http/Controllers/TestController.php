<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Support\Facades\Request;

class TestController extends Controller
{
    public function getAllData()
    {
        $data = Test::get();
        return $data;
    }
    public function getData(string $id)
    {
        $data = Test::find($id);
        return $data;
    }
    public function saveData(Request $request)
    {
        $data = new Test();
        $data->name = $request->get('name');
        $data->age = $request->get('age');
        $data->save();
        return 'Data created successfully';
    }

    public function static()
    {
        $data = [
            'name' => 'Afnan',
            'age' => 24
        ];
        return $data;
    }
}
