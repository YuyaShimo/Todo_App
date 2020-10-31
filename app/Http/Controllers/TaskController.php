<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    // フォルダ一覧を表示
    public function index() {

        $folders = Folder::all();

        return view('tasks/index', [

            'folders' => $folders,
        ]);
    }
}
