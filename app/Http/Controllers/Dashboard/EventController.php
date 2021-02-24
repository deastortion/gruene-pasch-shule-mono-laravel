<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Http\Request;


class EventController extends Controller
{

    protected $repository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->repository = $eventRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = $this->repository->all($request->search);

        return view('pages.backend.events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventCreateRequest $validatedRequest)
    {
        // return $validatedRequest;
        $this->repository->create($validatedRequest);


        return redirect('/dashboard/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($eventId)
    {
        $event = $this->repository->getById($eventId);
        return view('pages.backend.events.id', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($eventId)
    {
        $event = $this->repository->getById($eventId);

        return view('pages.backend.events.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventUpdateRequest $validatedRequest, $eventId)
    {

        $this->repository->update($validatedRequest, $eventId);
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);

        return redirect()->back();
    }
}
