<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CreateMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
    public function index()
    {
        return Inertia::render('Members/Index', [
            'members' => Member::orderBy('name', 'asc')
                ->paginate(10)
                ->through(fn ($member) => [
                    'id' => $member->id,
                    'name' => $member->name,
                    'designation' => $member->designation,
                    'photo_path' => $member->photo_path,
                    'created_at' => Carbon::parse($member->created_at)->format('M d, Y'),
                ]),
        ]);
    }
    public function show(Member $member)
    {
        return Inertia::render('Members/Show', [
            'member' => [
                'id' => $member->id,
                'name' => $member->name,
                'designation' => $member->designation,
                'photo_path' => $member->photo_path,
            ]
        ]);
    }

    public function edit(Member $member)
    {
        return Inertia::render('Members/Edit', [
            'member' => [
                'id' => $member->id,
                'name' => $member->name,
                'designation' => $member->designation,
                'photo_path' => $member->photo_path,
            ]
        ]);
    }

    public function update(UpdateMemberRequest $request, Member $member)
    {
        $member->update($request->validated());

        if ($request->hasFile('photo')) {
            $member->update(['photo_path' => $request->photo->store('users')]);
        }

        return Redirect::route('members.index')->with('success', 'Successfully updated.');

        // return Redirect::back()->with('success', 'Successfully updated.');
    }

    public function create()
    {
        return Inertia::render('Members/Create');
    }

    public function store(CreateMemberRequest $request)
    {
        Member::create($request->validated());

        return Redirect::route('members.index')->with('success', 'Successfully updated.');

        // return Redirect::back()->with('success', 'Successfully updated.');
    }


    public function destroy(Member $member)
    {
        $member->delete();
        return Redirect::route('members.index')->with('success', 'Successfully deleted.');
    }
}
