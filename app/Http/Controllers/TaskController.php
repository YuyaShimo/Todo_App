<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    // フォルダ一覧を表示
    public function index(int $id) {

        $folders = Folder::all();

        $current_folder = Folder::find($id);
        
        $tasks = Task::where('folder_id', '=', $current_folder->id)->get();
        dd($tasks);

        return view('tasks/index', [

            'folders' => $folders,
            'current_folder_id' => $current_folder->id,
            'tasks' => $tasks,

        ]);
    }
}
