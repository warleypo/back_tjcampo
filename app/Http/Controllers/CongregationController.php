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
            return Congregation::with('config')->whereHas('config', function (Builder $query) {
                $query->where('visibly', '1');
            })->get()->toJson();
        }

        return 'Visualização das congregações';
    }

    public function list() {
        return Congregation::select(['id', 'name', 'phone', 'address'])->whereHas('config', function (Builder $query) {
            $query->where('visibly', '1');
        })->get()->toJson();
    }

    public function show(Request $request, $id) {

        if ( $request->wantsJson()) {
            if (auth()->user() && (auth()->user()->congregation_id == $id || auth()->user()->email == 'softwarley@hotmail.com')) {
                return response()->json(
                    Congregation::with('config')->find($id)
                );
            } else {
                return response()->json(['error' => 'Unauthorized', 'user'=> auth()->user()], 203);
            }
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
