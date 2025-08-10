<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function index() {
        $presences = Presence::select('date')->groupBy('date')->get();
        return view('pages.presences.index', compact('presences'));
    }

    public function view($date) {
        $presences = Presence::with(['user'])->where('date', $date)->get();
        $date = Carbon::parse($date)->format('l, F d Y');
        return view('pages.presences.view', compact('presences', 'date'));
    }

    public function store(Request $request) {
        $user = $request->user();
        $hasPresence = Presence::where('user_id', $user->id)->where('date', now()->toDateString())->first();
        if($hasPresence) {
            return response()->json([
                'status' => 'error',
                'message' => 'You have filled out the presence.'
            ], 400);
        }

        Presence::create([
            'user_id' => $user->id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Your presence is successfully recorded.'
        ]);
    }
}
