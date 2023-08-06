<?php

namespace App\Http\Controllers;

use App\Models\Obj;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request)
    {
       $object = Obj::where('team_id',$request->user()->currentTeam->id)->where(
        'uuid',$request-> get('uuid', Obj::where('team_id',$request->user()
        ->currentTeam->id)->whereNull('parent_id')->first()->uuid)
        )
        ->firstOrFail(); //for current team 
        
        //Testing
        // dd($object);
        //dd($object->children);  //for path

        return view('files',[
            'object'=>$object
        ]);
    }
}
