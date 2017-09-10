<?php

namespace Emailer\Http\Controllers;

use Emailer\Events\FeedbackEvent;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package Emailer\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function feedback(Request $request)
    {
        $this->validateFeedback($request);
        $this->sendFeedbackNotification($request);
        return redirect()->home();
    }

    /**
     * @param Request $request
     */
    protected function validateFeedback(Request $request)
    {
        $this->validate($request, [
            'feedback' => 'required'
        ]);
    }

    /**
     * Sends feedback notification to admins
     *
     * @param Request $request
     */
    protected function sendFeedbackNotification(Request $request)
    {
        $context = [
            'user' => $request->user(),
            'feedback' => $request->input('feedback'),
        ];
        \Event::fire(\App::make(FeedbackEvent::class, ['context' => $context]));
        $request->session()->flash('alert-success', 'Thank your for feedback!');
    }
}
