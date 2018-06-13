@extends('layouts.app')

@section('title')
    FBPShare
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <p>
                Welcome to this project that war probably wont like being PHP :P
            </p>
            <p>
                In any case, pick an action.
            </p>

            <a href="{{ route('all-blueprints') }}">
                <h4>
                    View all blueprints
                </h4>
            </a>

            @if(Auth::check())
                <a href="{{ route('user-blueprints', ['user' => Auth::user()->id]) }}">
                    <h4>
                        View my blueprints
                    </h4>
                </a>

                <a href="{{ route('saved-blueprints', ['user' => Auth::user()->id]) }}">
                    <h4>
                        View saved blueprints
                    </h4>
                </a>

                <a href="{{ route('add-blueprint') }}">
                    <h4>
                        Add new blueprint
                    </h4>
                </a>
            @endif
        </div>
    </div>
@endsection