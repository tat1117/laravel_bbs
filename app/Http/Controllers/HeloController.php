<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HeloController extends Controller
{
    public function getIndex(Request $request)
    {
        $data = DB::select('select * from post');
        return view('helo', ['message' => 'MyTable List','data' => $data]);
    }

}
