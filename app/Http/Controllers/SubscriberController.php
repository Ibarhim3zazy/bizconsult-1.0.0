<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscriber::paginate(config('pagination.count'));
        return view('admin.subscribers.index', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriberRequest $request)
    {
        Subscriber::create($request->validated());
        return back()->with('subscriber_success_message', __('keywords.you_have_subscribed_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return back()->with('success', __('keywords.subscriber_has_been_deleted_successfully'));
    }
}
