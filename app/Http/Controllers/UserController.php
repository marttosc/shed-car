<?php

namespace Shed\Http\Controllers;

use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Exception\UpdateResourceFailedException;
use Dingo\Api\Http\Request;
use Shed\Services\UserService;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
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
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|max:255',
        ];

        $payload = $request->only(['name', 'email', 'password']);

        $validator = app('validator')->make($payload, $rules);

        if ($validator->fails()) {
            throw new StoreResourceFailedException('Could not create new user.', $validator->errors());
        }

        return $this->service->createUser($payload);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Dingo\Api\Http\Request $request
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $allowed = ['mechanists'];

        $with = explode(',', $request->input('with', '') ?? '');

        $load = array_unique(
            array_filter($with, function ($item) use ($allowed) {
                return in_array($item, $allowed);
            })
        );

        $user = $this->service->findUser($id);

        if (!empty($load)) {
            $user->load($load);
        }

        return $user;
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
            'name'     => 'required|max:255',
            'password' => 'nullable|min:6|max:255',
        ];

        $payload = $request->only(['name', 'password']);

        $validator = app('validator')->make($payload, $rules);

        if ($validator->fails()) {
            throw new UpdateResourceFailedException('Could not update user.', $validator->errors());
        }

        $updated = $this->service->updateUser($payload, $id);

        $response = array_merge([ 'updated' => (boolean) $updated ], $this->service->findUser($id)->toArray());

        return $response;
    }
}
