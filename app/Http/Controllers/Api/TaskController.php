<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiBaseController;
use Illuminate\Http\Request;
use App\Model\Task;
use Illuminate\Support\Facades\Validator;

class TaskController extends ApiBaseController
{

    private function validator($data, $id = null)
    {
        return Validator::make($data, [
            'name'           => 'required|max:255|unique:tasks,name,' . $id,
            'start_date'     => 'required|date|date_format:Y-m-d|before_or_equal:end_date',
            'end_date'       => 'required|required_with:start_date|date|date_format:Y-m-d|after_or_equal:start_date',
            'assign_user_id' => 'required|integer'
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$requestQuery = request()->query();
        $condition    = array_key_exists('type', $requestQuery) && $requestQuery['type'] === 'favourite';
        $allNotes     = $condition ? Note::where('is_favourite', true)->latest()->get() : Note::latest()->get();*/
        $tasks = Task::select('id', 'name', 'start_date', 'end_date', 'status', 'assign_user_id', 'created_at')
          ->orderBy('id', 'desc')
          ->paginate(10);
        $response = [
            'pagination' => [
                'total'        => $tasks->total(),
                'per_page'     => $tasks->perPage(),
                'current_page' => $tasks->currentPage(),
                'last_page'    => $tasks->lastPage(),
                'from'         => $tasks->firstItem(),
                'to'           => $tasks->lastItem()
            ],
            'data'       => $tasks
        ];

        return $this->responseJson(self::STATUS_SUCCESS, 'Get list task success', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Task::findOrFail($id);
        return $this->responseJson(self::STATUS_SUCCESS, sprintf('Get detail task id %s success', $id), $tasks);
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
      try {
        $inputs    = $request->json()->all();
        $task      = Task::findOrFail($id);
        $validator = $this->validator($inputs, $id);
        if ($validator->fails()) {
          return $this->responseJson(self::STATUS_ERROR, 'Validate errors', $validator->errors());
        }
        $task->fill($inputs);
        $task->save();
        return $this->responseJson(self::STATUS_SUCCESS, 'Update task success', $task);
      } catch (Exception $e) {
        return $this->responseJson(self::STATUS_ERROR, 'Update task failed');
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs              = $request->json()->all();
        $inputs['create_by'] = 1; //auth()->user();
        $validator           = $this->validator($inputs);
        if ($validator->fails()) {
            return $this->responseJson(self::STATUS_ERROR, 'Validate errors', $validator->errors());
        }
        $result = Task::create($inputs);
        return $this->responseJson(self::STATUS_SUCCESS, 'Create task success', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
          $task = Task::findOrFail($id)->delete();
          return $this->responseJson(self::STATUS_SUCCESS, 'Delete task id ' . $id . ' success', $task);
        } catch (Exception $e) {
          return $this->responseJson(self::STATUS_ERROR, 'Delete task failed');
        }

    }
}
