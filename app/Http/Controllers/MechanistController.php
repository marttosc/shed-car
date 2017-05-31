<?php

namespace Shed\Http\Controllers;

use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Exception\UpdateResourceFailedException;
use Dingo\Api\Http\Request;
use Shed\Services\MechanistService;

class MechanistController extends Controller
{

    /**
     * @var MechanistService
     */
    protected $service;

    public function __construct(MechanistService $service)
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
        return $this->service->getAllMechanists();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Dingo\Api\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'is_owner'  => 'nullable|boolean',
            'name'      => 'required|min:10',
            'address'   => 'required|min:10',
            'number'    => 'nullable|min:2',
            'state'     => 'required|exists:states,uf',
            'city'      => 'required|exists:cities,_id',
            'telephone' => 'required|integer',
        ];

        $payload = $request->only(array_keys($rules));

        $validator = app('validator')->make($payload, $rules);

        if ($validator->fails()) {
            throw new StoreResourceFailedException('Could not create new mechanist.', $validator->errors());
        }

        if (!array_key_exists('is_owner', $payload)) {
            $payload['is_owner'] = false;
        }

        $user = $request->user();

        return $this->service->createMechanist($payload, $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->service->findMechanist($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Dingo\Api\Http\Request $request
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'is_owner'  => 'nullable|boolean',
            'name'      => 'required|min:10',
            'address'   => 'required|min:10',
            'number'    => 'nullable|min:2',
            'state'     => 'required|exists:states,uf',
            'city'      => 'required|exists:cities,_id',
            'telephone' => 'required|integer',
        ];

        $payload = $request->only(array_keys($rules));

        $validator = app('validator')->make($payload, $rules);

        if ($validator->fails()) {
            throw new UpdateResourceFailedException('Could not update mechanist.', $validator->errors());
        }

        if (!array_key_exists('is_owner', $payload)) {
            $payload['is_owner'] = false;
        }

        $updated = $this->service->updateMechanist($payload, $id);

        $response = array_merge(['updated' => (boolean) $updated], $this->service->findMechanist($id)->toArray());

        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
