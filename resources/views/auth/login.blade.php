@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>
                                Email
                            </label>
                            <input type="email" name="email" class="form-control input-sm" placeholder="Email..." required autofocus />
                        </div>
                        <div class="form-group">
                            <label>
                                Password
                            </label>
                            <input type="password" name="password" class="form-control input-sm" placeholder="Password..." required />
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember" />
                                Remember me
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
@endsection
