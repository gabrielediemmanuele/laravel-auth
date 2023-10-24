<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        /* $projects = Project::paginate(10); */
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* inside $data there are form dates */
        /*  $data = $request->all(); */

        /* validation call */
        $data = $this->validation($request->all());

        /* create a new comic*/
        $project = new Project();

        /* fill with form information */
        $project->fill($data);

        /* save inside database */
        $project->save();

        /* 
        ! REMEMBER TO CODE IN MODEL FOR FILLABLE CONTENTS  
        */
        return redirect()->route('admin.projects.show', $project)
            ->with('message_type', 'success')
            ->with('message', 'Comic added successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'author' => 'required|string|max:50',
                'title' => 'required|string|max:50',
                'date' => 'require|string|max:50',
                'description' => 'required',
                'slug' => 'required|string',
            ],
            [
                'author.required' => 'The author is binding!',
                'author.string' => 'author need to be a string!',
                'author.max' => 'The author must have max 100 characters!',

                'title.required' => 'The title is binding!',
                'title.string' => 'title need to be a string!',
                'title.max' => 'The title must have max 100 characters!',

                'date.required' => 'The date is binding!',
                'date.string' => 'date need to be a string!',
                'date.max' => 'The date must have max 100 characters!',

                'description.required' => 'The date is binding!',

                'slug.required' => 'The slug is binding!',
                'slug.string' => 'slug need to be a string!'
            ]
        )->validate();

        return $validator;
    }
}
