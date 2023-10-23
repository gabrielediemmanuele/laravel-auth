@extends('layouts.app')

{{--* font awesome  --}}
@section('font-awesome')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

{{--* CONTENT --}} 
@section('content')
<div class="container mt-5">
    Lista
</div>
    <div class="container mt-5">
        {{-- @dump($projects) --}}
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Slug</th>
                <th scope="col">Create At</th>
                <th scope="col">Update At</th>
                <th scope="col">Details</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
              <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->author}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->date}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->created_at}}</td>
                <td>{{$project->updated_at}}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project)}}">
                        <i class="fa-solid fa-up-right-from-square"></i>
                    </a>
                </td>
                <td> 
                    <a href="#" class="text-success">
                        <i class="fa-solid fa-pen-to-square">
                            
                        </i>
                    </a>
                </td>
                <td>
                    <a href="#" class="text-danger">
                        <i class="fa-solid fa-trash-arrow-up"></i>
                    </a>
                </td>
              </tr>
              @empty 
                  <tr>
                    <td> <i> Non ci sono progetti.</i></td>
                  </tr>
              @endforelse
            </tbody>
          </table>
        {{-- {{ $posts->links('pagination::bootstrap-5')}} --}}


    </div>
@endsection