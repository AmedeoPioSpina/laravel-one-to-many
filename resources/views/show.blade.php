@extends('layouts.app')

@section('content')
    <div>
        <p>
            Name: {{$project->name}}
        </p>
        <p>
            Type: {{$project->type->name}}
        </p>
    </div>
@endsection