<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\OrganizationUpdateRequest;

class OrganizationController extends Controller
{

    public function edit(Organization $organization): View
    {
        return view('admin.organization', [
            'organization' => $organization,
        ]);
    }

    public function update(OrganizationUpdateRequest $request): RedirectResponse
    {
        $request->organization()->fill($request->validated());

        $request->organization()->save();

        return Redirect::route('admin.organization')->with('status', 'organization-updated');
    }
}
