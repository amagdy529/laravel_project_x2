<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevisitRequest;
use App\Http\Requests\UpdatevisitRequest;
use App\Repositories\visitRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;


use App\User ;

class visitController extends AppBaseController
{
    /** @var  visitRepository */
    private $visitRepository;

    public function __construct(visitRepository $visitRepo)
    {
        $this->visitRepository = $visitRepo;
    }

    /**
     * Display a listing of the visit.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->visitRepository->pushCriteria(new RequestCriteria($request));
        $visits = $this->visitRepository->all();
        //print_r($visits);
        foreach ($visits as $key => $visit) {
          # code...
          $patient_id= $visit['patient_id'];
          $user = User::findOrFail($patient_id);
          //print_r($user['name']);
          $patients_name_arr = array( 'name' => $user['name']);
          //$visits_arr = array('patient_name '=> $user['name']);
          print_r($patients_name_arr);
        }
        print_r($patients_name_arr);
        //$visits_arr = array($visits);
        //print_r($visits_arr);
        return view('visits.index')
            ->with('visits', $visits)
            //->with('visits_arr', $visits_arr)
            ->with('patients_names', $patients_name_arr);
    }

    /**
     * Show the form for creating a new visit.
     *
     * @return Response
     */
    public function create()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('visits.create', compact('users'));
    }

    /**
     * Store a newly created visit in storage.
     *
     * @param CreatevisitRequest $request
     *
     * @return Response
     */
    public function store(CreatevisitRequest $request)
    {
        $input = $request->all();

        $visit = $this->visitRepository->create($input);

        Flash::success('Visit saved successfully.');

        return redirect(route('visits.index'));
    }

    /**
     * Display the specified visit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visit = $this->visitRepository->findWithoutFail($id);

        if (empty($visit)) {
            Flash::error('Visit not found');

            return redirect(route('visits.index'));
        }

        return view('visits.show')->with('visit', $visit);
    }

    /**
     * Show the form for editing the specified visit.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visit = $this->visitRepository->findWithoutFail($id);

        if (empty($visit)) {
            Flash::error('Visit not found');

            return redirect(route('visits.index'));
        }

        return view('visits.edit')->with('visit', $visit);
    }

    /**
     * Update the specified visit in storage.
     *
     * @param  int              $id
     * @param UpdatevisitRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevisitRequest $request)
    {
        $visit = $this->visitRepository->findWithoutFail($id);

        if (empty($visit)) {
            Flash::error('Visit not found');

            return redirect(route('visits.index'));
        }

        $visit = $this->visitRepository->update($request->all(), $id);

        Flash::success('Visit updated successfully.');

        return redirect(route('visits.index'));
    }

    /**
     * Remove the specified visit from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visit = $this->visitRepository->findWithoutFail($id);

        if (empty($visit)) {
            Flash::error('Visit not found');

            return redirect(route('visits.index'));
        }

        $this->visitRepository->delete($id);

        Flash::success('Visit deleted successfully.');

        return redirect(route('visits.index'));
    }
}
