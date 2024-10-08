<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;//追加

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {$rules = [
        'task_name' => 'required|max:100',
      ];
     
      $messages = ['required' => '必須項目です', 'max' => '100文字以下にしてください。'];
     
      Validator::make($request->all(), $rules, $messages)->validate();

         //モデルをインスタンス化
        $task=new task;
        //モデル->カラム名 = 値で、データを割り当てる
        $task_name = $request->input('task_name');
        //データベースに保存
        $task->save();
        //リダイレクト
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
