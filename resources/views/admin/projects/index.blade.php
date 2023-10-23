@extends('layouts.app')

@section('content')
<div class="container mt-5">
    Lista
</div>
    <div class="container mt-5">
        @dump($projects)

        {{-- {{ $posts->links('pagination::bootstrap-5')}} --}}
    </div>
@endsection