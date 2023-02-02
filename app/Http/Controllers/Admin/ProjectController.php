<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user();
        
        $users = User::all();

        $projects = Project::all();

        return view("admin.index", compact('users', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "CREA NUOVO PROGETTO";

        return view("admin.create", compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validated() usa le regole indicate nella funzione rules dello StorePostRequest e ci ritorna i dati validati
        // $data = $request->validated();
        
        $data = $request->all();

        $project = new Project();
        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->cover_img = $data['cover_img'];
        $project->github_link = $data['github_link'];
        $project->save();

        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // $project = Project::findOrFail($id);

        return view('admin.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        // $project = Project::findOrFail($id);

        return view('admin.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        // validated() usa le regole indicate nella funzione rules dell'UpdatePostRequest e ci ritorna i dati validati
        // $data = $request->validated();

        $data = $request->all();

        // $project = Project::findOrFail($id);
        $project->update($data);

        return redirect()->route('projects.index', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        
        $project->delete();

        return redirect()->route("projects.index");
    }
}
