@extends('layouts.app')

@section('title')
    Blueprint - {{ $blueprint->name }}
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h4>
                {{ $blueprint->name }}
            </h4>
            @if($blueprint->image != null)
                <br>
                <img src="{{ str_replace('public/', 'storage/', asset($blueprint->image)) }}" class="blueprint-image" />
            @endif
            <br>
            <p>
                {{ $blueprint->description }}
            </p>
            <p>
                Added by: {{ $blueprint->user->name }}
            </p>
            <div class="form form-group">
                <textarea rows="10" class="form-control input-sm" readonly>{{ $blueprint->bp_string }}</textarea>
            </div>
        </div>
    </div>
@endsection