<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function jsonRequest(Request $request)
    {
        // Access the data sent via the AJAX request
        $data = $request->all();
        $response = [];
        if (!empty($data)) {// check the variable we have data or not instead of empty we can check any condition with respect to the value also.
            $response['status'] = 'success';
            $response['message'] = 'Acknowledged!! Json Data recieved successfully...';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Json data is blank.';
        }
        
        // Send the response to the JSON request
        return response()->json($response);
    }
}
