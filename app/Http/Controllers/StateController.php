<?php

namespace Shed\Http\Controllers;

use Shed\Services\StateService;

class StateController extends Controller
{

    /**
     * @var StateService
     */
    protected $service;

    public function __construct(StateService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [
            'data' => [
                'states' => $this->service->getAllStates(),
            ],
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = strtoupper($id);

        return [
            'data' => [
                'state' => $this->service->findState($id),
            ],
        ];
    }
}
