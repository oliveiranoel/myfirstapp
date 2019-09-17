<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        //return $projects;

        return view('projects.index', ['projects' => $projects]);
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        /* Variant 1 */
//        $project = new Project();
//
//        $project->title = request('title');
//        $project->description = request('description');
//
//        $project->save();

        /* Variant 2 */
//        Project::create([
//           'title' => request('title'),
//           'description' => request('description')
//        ]);

        /* Variant 3 */
        /* Laravel validation rules in Google for more */
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3', 'max:255']
        ]);

        Project::create($attributes);

        return redirect('/projects');

        //return request('title');
        //return request()->all();
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        //dd('delete');
        //Project::findOrFail($id)->delete();

        $project->delete();

        return redirect('/projects');
    }
}
