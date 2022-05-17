<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Congregation;
use Illuminate\Database\Eloquent\Model;

class CongregationController extends Controller
{
    public function __construct()
    {
        $this->middleware('accessperm')->only('show');
    }


    public function index(Request $request) {
        if ($request->wantsJson()) {
            return Congregation::with('config')->FilterByCongregation()->get()->toJson();
        }

        return 'Visualização das congregações';
    }

    public function list() {
        return Congregation::HideCongregationNotVisible()->select(['id', 'name'])->get()->toJson();
    }

    public function show(Request $request, $id) {

        if ( $request->wantsJson()) {
            return response()->json(
                Congregation::with('config')->FilterByCongregation()->find($id)
            );
        }

        return 'Congregação '.$id;
    }

    public function create() {
        return view('laravel');
    }

    public function store(FormRequest $request) {
        return 'Oi mundo';
    }
}
