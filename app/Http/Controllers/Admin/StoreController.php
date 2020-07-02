<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("admin");
    }


    /**
     * Show the store listing page.
     *
     * @return Renderable
     */
    public function index()
    {
        return view("admin.preferences.stores.home");
    }


    /**
     * Show the form for creating a new store.
     *
     * @return Factory|Response|View
     */
    public function create()
    {
        return view("admin.preferences.stores.create");
    }


    /**
     * Store a newly created store to storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the store
     *
     * @param  int  $id
     * @return Factory|Response|View
     */
    public function edit($id)
    {
        return view("admin.preferences.stores.edit");
    }


    /**
     * Update the specified store to storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    /**
     * Remove the specified store from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}