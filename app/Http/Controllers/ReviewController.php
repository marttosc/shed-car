<?php

namespace Shed\Http\Controllers;

use Dingo\Api\Exception\StoreResourceFailedException;
use Dingo\Api\Http\Request;
use Shed\Services\MechanistService;
use Shed\Services\ReviewService;

class ReviewController extends Controller
{
    /**
     * @var MechanistService
     */
    protected $service;

    protected $mechanist;

    public function __construct(ReviewService $service, MechanistService $mechanist)
    {
        $this->service = $service;
        $this->mechanist = $mechanist;
    }

    /**
     * Display a listing of the resource.
     *
     * @param mixed $mechanist
     * @return \Illuminate\Http\Response
     */
    public function index($mechanist)
    {
        return [
            'data' => [
                'reviews' => $this->service->getAllReviews($mechanist),
            ],
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Dingo\Api\Http\Request $request
     * @param mixed $mechanist
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $mechanist)
    {
        $rules = [
            'note'   => 'nullable|max:255',
            'review' => 'required|integer|between:1,5',
        ];

        $payload = $request->only(array_keys($rules));

        $validator = app('validator')->make($payload, $rules);

        if ($validator->fails()) {
            throw new StoreResourceFailedException('Could not create new review.', $validator->errors());
        }

        $mechanist_obj = $this->mechanist->findMechanist($mechanist);

        if ($request->user()->id == $mechanist_obj->user_id && $mechanist_obj->is_owner == true) {
            throw new StoreResourceFailedException('Owner cannot create new review.', $validator->errors());
        }

        $payload['user_id'] = $request->user()->id;
        $payload['mechanist_id'] = $mechanist;

        return [
            'data' => [
                'review' => $this->service->createReview($payload),
            ],
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param mixed $mechanist
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function show($mechanist, $id)
    {
        return [
            'data' => [
                'review' => $this->service->getReview($id),
            ],
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  mixed $mechanist
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($mechanist, $id)
    {
        return $this->service->deleteReview($id);
    }
}
