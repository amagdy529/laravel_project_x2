<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetweetRequest;
use App\Http\Requests\UpdatetweetRequest;
use App\Repositories\tweetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tweetController extends AppBaseController
{
    /** @var  tweetRepository */
    private $tweetRepository;

    public function __construct(tweetRepository $tweetRepo)
    {
        $this->tweetRepository = $tweetRepo;
    }

    /**
     * Display a listing of the tweet.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tweetRepository->pushCriteria(new RequestCriteria($request));
        $tweets = $this->tweetRepository->all();

        return view('tweets.index')
            ->with('tweets', $tweets);
    }

    /**
     * Show the form for creating a new tweet.
     *
     * @return Response
     */
    public function create()
    {
        return view('tweets.create');
    }

    /**
     * Store a newly created tweet in storage.
     *
     * @param CreatetweetRequest $request
     *
     * @return Response
     */
    public function store(CreatetweetRequest $request)
    {
        $input = $request->all();

        $tweet = $this->tweetRepository->create($input);

        Flash::success('Tweet saved successfully.');

        return redirect(route('tweets.index'));
    }

    /**
     * Display the specified tweet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tweet = $this->tweetRepository->findWithoutFail($id);

        if (empty($tweet)) {
            Flash::error('Tweet not found');

            return redirect(route('tweets.index'));
        }

        return view('tweets.show')->with('tweet', $tweet);
    }

    /**
     * Show the form for editing the specified tweet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tweet = $this->tweetRepository->findWithoutFail($id);

        if (empty($tweet)) {
            Flash::error('Tweet not found');

            return redirect(route('tweets.index'));
        }

        return view('tweets.edit')->with('tweet', $tweet);
    }

    /**
     * Update the specified tweet in storage.
     *
     * @param  int              $id
     * @param UpdatetweetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetweetRequest $request)
    {
        $tweet = $this->tweetRepository->findWithoutFail($id);

        if (empty($tweet)) {
            Flash::error('Tweet not found');

            return redirect(route('tweets.index'));
        }

        $tweet = $this->tweetRepository->update($request->all(), $id);

        Flash::success('Tweet updated successfully.');

        return redirect(route('tweets.index'));
    }

    /**
     * Remove the specified tweet from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tweet = $this->tweetRepository->findWithoutFail($id);

        if (empty($tweet)) {
            Flash::error('Tweet not found');

            return redirect(route('tweets.index'));
        }

        $this->tweetRepository->delete($id);

        Flash::success('Tweet deleted successfully.');

        return redirect(route('tweets.index'));
    }
}
