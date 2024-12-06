<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function showSubscriptions()
    {
        $subscription = Membership::all();  // Update to the correct table name
        
        return view('subcription', compact('subscription'));
    }
    
}

