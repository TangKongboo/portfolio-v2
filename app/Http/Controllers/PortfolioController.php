<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Message;

class PortfolioController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $projects = Project::all();
        
        return view('portfolio.index', compact('skills', 'projects'));
    }

    public function storeMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        Message::create($validated);

        return redirect('/#contact')->with('success', 'Thank you for your message! I will get back to you soon.');
    }
}
