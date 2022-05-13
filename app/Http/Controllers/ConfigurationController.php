<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Scopes\FilterCongregationScope;
use Illuminate\Database\Eloquent\Builder;

class ConfigurationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('accessperm');
    }

    public function index() {
        if (auth()->check() && auth()->user()->permission == 7) {
            return Configuration::withoutGlobalScopes([FilterCongregationScope::class])->get()->toJson();
        }
        return Configuration::all()->toJson();
    }

    public function show($id) {
        return response()->json(Configuration::find($id));
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
