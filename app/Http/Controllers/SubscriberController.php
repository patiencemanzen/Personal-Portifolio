<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\SubscriberRequest;
    use App\Models\Subscriber;

    class SubscriberController extends Controller {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index() {
            $subscribers = Subscriber::all();

            return view('subscribers.index', compact('subscribers'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(SubscriberRequest $request) {
            $subscriber = Subscriber::create($request->validated());

            return view('subscribers.index');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Subscriber $subscriber) {
            $subscriber->delete();

            return view('subscribers.index');
        }
    }
