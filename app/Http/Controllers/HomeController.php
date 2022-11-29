<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        if (Auth::check()) {
            $todolist = Todolist::paginate(5);
            return view('home', compact('todolist'));
        }
        else {
            return redirect()->route('login');
        }
    }

    public function actiontambah(Request $request) {
        $data = [
            'task' => $request->input('task'),
            'id_user' => Auth::user()->id
        ];
        Todolist::create($data);
        return redirect()->route('home');
    }

    public function actionhapus(Request $request, $id) {
        Todolist::find($id)->delete();
        return redirect()->route('home');

    }
}
