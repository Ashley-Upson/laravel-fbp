@extends('layouts.app')

@section('title')
    All Blueprints
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h4>
                All Blueprints
            </h4>
        </div>
    </div>
    <div class="row">
        @if(count($blueprints) == 0)
            <div class="col-sm-12">
                <div class="alert alert-warning text-center">
                    <p>
                        No blueprints added yet.
                    </p>
                </div>
            </div>
        @endif
        @foreach($blueprints as $blueprint)
            <div class="col-sm-4">
                @if(Auth::check() && Auth::user()->id == $blueprint->user_id)
                    <div class="pull-right">
                        <form class="form" name="remove-blueprint" method="post" action="{{ route('delete-blueprint', ['id' => $blueprint->id]) }}">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Remove
                            </button>
                        </form>
                    </div>
                @endif
                <h4>
                    <a href="{{ route('view-blueprint', ['id' => $blueprint->id]) }}">
                        {{ $blueprint->name }}
                    </a>
                </h4>
                @if($blueprint->image != null)
                    <br>
                    <img src="public/storage/app/public/{{ str_replace('public/', '', $blueprint->image )}}" class="blueprint-image-small" />
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
        @endforeach
    </div>
@endsection