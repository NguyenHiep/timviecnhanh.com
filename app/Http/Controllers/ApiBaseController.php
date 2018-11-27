<?php

namespace App\Http\Controllers;

class ApiBaseController extends Controller
{

    const STATUS_SUCCESS = true;
    const STATUS_ERROR   = false;

    protected function responseJson($status = self::STATUS_ERROR, $message = '', $data = [])
    {
        return response()->json([
            'status'  => $status,
            'message' => $message,
            'data'    => $data,
        ]);
    }

    protected function responseJsonWithError($status = self::STATUS_ERROR, $message = '', $errors = [])
    {
        return response()->json([
            'status'  => $status,
            'message' => $message,
            'errors'  => $errors,
        ]);
    }
}
