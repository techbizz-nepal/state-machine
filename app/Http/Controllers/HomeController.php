<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\RouteAttributes\Attributes\Get;


class HomeController extends Controller
{
    /**
     * @throws Exception
     */
    #[Get('/')]
    public function index(Request $request)
    {
        $model = new Invoice();
        $model->id = Str::orderedUuid();
//        $model->status = 'open';

//        dd($model->state()->pay());
        dd($model->state()->finalize());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
