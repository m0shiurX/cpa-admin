<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateNetworkRequest;

class NetworkController extends Controller
{
    public function index()
    {
        return Inertia::render('Networks/Index', [
            'networks' => Network::orderBy('name', 'asc')
                ->paginate(10)
                ->through(fn ($network) => [
                    'id' => $network->id,
                    'name' => $network->name,
                    'description' => $network->description,
                    'created_at' => Carbon::parse($network->created_at)->format('M d, Y'),
                ]),
        ]);
    }
    public function show(Network $network)
    {
        return Inertia::render('Networks/Show', [
            'network' => [
                'id' => $network->id,
                'name' => $network->name,
                'description' => $network->description
            ]
        ]);
    }

    public function edit(Network $network)
    {
        return Inertia::render('Networks/Edit', [
            'network' => [
                'id' => $network->id,
                'name' => $network->name,
                'description' => $network->description
            ]
        ]);
    }

    public function update(UpdateNetworkRequest $request, Network $network)
    {
        $network->update($request->validated());

        return Redirect::route('networks.index')->with('success', 'Successfully updated.');

        // return Redirect::back()->with('success', 'Successfully updated.');
    }
}
