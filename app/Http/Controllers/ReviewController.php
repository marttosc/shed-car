<?php

namespace Shed\Http\Controllers;

use Dingo\Api\Http\Request;
use Shed\Services\ReviewService;

class ReviewController extends Controller
{
    /**
     * @var MechanistService
     */
    protected $service;

    public function __construct(ReviewService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @param mixed $mechanist
     * @return \Illuminate\Http\Response
     */
    public function index($mechanist)
    {
        return $this->service->getAllReviews($mechanist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Dingo\Api\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return $this->service->getReview($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
