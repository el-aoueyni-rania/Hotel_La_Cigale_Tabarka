<?php

namespace App\Http\Controllers\Admin;

use App\Bienetre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class BienetreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bienetre.index' , ['bienetres' => Bienetre::paginate(17)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bienetre.bcreate ');
    }

    /**
     * Store a newly created resource in storage.
      *@param  \App\Bienetre  $bienetre
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validateData = $request->validate([
           'Type_de_Bienetres_choisie' => 'required',
           'prix' => 'required',
           'Description' => 'required'
           ]);
        $bienetre = Bienetre::create($validateData);
        return redirect()->route('bienetres.show', $bienetre)->with('storeBienetre', "Bienetre Has been Upadted !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bienetre  $bienetre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bienetre =Bienetre::find($id);
        return view('admin.bienetre.bdetail',  ['bienetre' =>$bienetre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bienetre  $bienetre
     * @return \Illuminate\Http\Response
     */
    public function edit(Bienetre $bienetre)
    {
        return view('admin.bienetre.bedit',  ['bienetre' =>$bienetre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bienetre  $bienetre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bienetre $bienetre)
    {
        $validateData = $request->validate([
            'Type_de_Bienetres_choisie' => 'required',
            'prix' => 'required',
            'Description' => 'required'
            ]);
            $bienetre->update($validateData);

        return view('admin.bienetre.bdetail',  ['bienetre' =>$bienetre])->with('updateBienetre', "Bienetre Has been Upadted !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bienetre  $bienetre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bienetre $bienetre)
    {
        $bienetre->delete();
        return redirect()->route('bienetres.index')->with('deleteBienetre', 'Bienetre has been deleted !');
    }
       private function validationRules()
        {
            return[

                    'Type_de_Bienetres_choisie' => 'required',
                    'prix' => 'required',
                    'Description' => 'required'

            ];
        }
    }

