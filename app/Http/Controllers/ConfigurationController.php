<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;
// use App\Models\Scopes\FilterCongregationScope;
use Illuminate\Database\Eloquent\Builder;

class ConfigurationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('accessperm');
    }

    public function index(Request $request) {
        if ($request->wantsJson()) {
            return Configuration::all()->toJson();
        }

        return 'Visualização das configurações';
    }

    public function show(Request $request, $id) {
        if ($request->wantsJson()) {
            return response()->json(Configuration::find($id));
        }

        return 'Show config';
    }

    public function edit($id) {
        return 'Editando fulano!';
    }

    public function store(Request $request) {
        return 'Armazenando fulano!';
    }

    public function update(Request $request, $id) {
        return 'Atualizando fulano!';
    }

    public function delete($id) {
        return 'Removendo fulano!';
    }
}
