<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Checklist;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(StoreTaskRequest $request, Checklist $checklist)
    {
        $position = $checklist->tasks()->max('position') + 1;
        $checklist->tasks()->create($request->validated() + ['position' => $position]);
        
        return redirect()->route('admin.checklist_groups.checklists.edit',
        [
            $checklist->checklist_group_id, $checklist
        ]);
    }

   
    public function show($id)
    {
        //
    }


    public function edit(Checklist $checklist, Task $task)
    {
        return view('admin.tasks.edit', compact('checklist', 'task'));
    }


    public function update(StoreTaskRequest $request, Checklist $checklist, Task $task)
    {
        $task->update($request->validated());
        
        return redirect()->route('admin.checklist_groups.checklists.edit',
        [
            $checklist->checklist_group_id, $checklist
        ]);
    }



    public function destroy(Checklist $checklist, Task $task)
    {

        $checklist->tasks()->where('position', '>', $task->position)->update(
            ['position' => DB::raw('position - 1')]
        );

        $task->delete();
        
        return redirect()->route('admin.checklist_groups.checklists.edit',
        [
            $checklist->checklist_group_id, $checklist
        ]);
    }
}
