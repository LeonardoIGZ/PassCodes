<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePassCodePasswordRequest;
use App\Http\Requests\SavePassCodeRequest;
use App\Models\PassCode;
use Illuminate\Http\Request;

class PassCodeController extends Controller
{
    public function index()
    {
        $passCodes = PassCode::orderBy('created_at', 'DESC')->get();

        return view('visualizar', compact('passCodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePassCodeRequest $request)
    {
        
        PassCode::create($request->validated());
        return redirect()->route('home');
    }
    public function indexValidate()
    {
        $alert="";
        return view('validar', compact('alert'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(SavePassCodePasswordRequest $request)
    {
        
        $passCode = PassCode::select('*')->where('passcode', $request->passcode)->first();
        if(isset($passCode))
        {
            $alert = "Si se encontro el PassCode";
            $intentos = 3;
        }
        else
        {
            $alert = "No se encontro el PassCode";
            $intentos = ($request->count)-1;

            if($intentos == 0){
                $alert = "Has sobrepasado los intentos";

                return view('inicio', compact('alert','intentos'));
            }
        }
        return view('validar', compact('alert','intentos'));
        //return $passCode;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
