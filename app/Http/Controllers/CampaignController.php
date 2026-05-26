<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
   
    public function index(): view{
        return view(view: 'campaigns.index',data: ['campaigns'=>Campaign::latest()->get()]);
    }

    public function create(): view{
        return view(view: "campaign.create");
    }

    public function store(Request $request): RedirectResponce{
        $request->validate(rules: [
            "subject"=>"required",
            "email_body"=>"required",
            "phishing_link"=>"required|url",
        ]);

        campaign::create(attributes: $request->all());
        return redirect()->route(route: 'campaign.index')->with(key: 'Success',value: 'Campaign Created.');
    }
}
