<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('accessperm');
    }

    public function index() {
        return 'index now!';
    }

    public function show($id) {
        return 'Oi mundo!';
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
