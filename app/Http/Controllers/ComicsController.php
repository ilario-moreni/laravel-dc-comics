<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comics;

class ComicsController extends Controller{
    public function index(){
        $comics = Comics::all();
        return view('partials.current_series', compact('comics'));
    }

    public function showSingle(){
        $comic = Comics::id();
        return view('partials.single', compact('comic'));
    }
}

?>