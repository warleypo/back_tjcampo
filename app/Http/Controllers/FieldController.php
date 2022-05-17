<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;

class FieldController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('accessperm');
    }

    public function index(Request $request) {
        if ($request->wantsJson()) {
            return Field::with(['group', 'manager'])->get()->toJson();
        }

        return 'Visualização das configurações';
    }
}
