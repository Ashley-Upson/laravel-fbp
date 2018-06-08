@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6">
                    <form method="POST" action="{{ route('register') }}">
                        <div class="form-group">
                            <label>
                                Name
                            </label>
                            <input type="text" name="name" class="form-control input-sm" placeholder="Name..." required />
                        </div>
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
                                Confirm Password
                            </label>
                            <input type="password" name="password_confirmation" class="form-control input-sm" placeholder="Password confirm..." required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
@endsection