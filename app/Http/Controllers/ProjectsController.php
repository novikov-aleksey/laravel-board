<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        auth()->user()->projects()->create($attributes);

        return redirect('/projects');
    }

    /**
     *
     * @param \App\Project $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Project $project)
    {
        if (auth()->user()->isNot($project->owner)) {
            die(403);
        }

        return view('projects.show', compact('project'));
    }
}
