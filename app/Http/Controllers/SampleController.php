<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SampleController extends Controller
{
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => [
                'sometimes',
                Rule::prohibitedIf(fn() => $request->query('test') == 10),
            ]
        ]);

        return $validated;
    }
}
