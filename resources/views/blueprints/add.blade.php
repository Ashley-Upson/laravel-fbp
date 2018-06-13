@extends('layouts.app')

@section('title')
    Add Blueprint
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form class="form" name="add-blueprint" action="{{route('create-blueprint')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>
                                Name
                            </label>
                            <input type="text" name="name" class="form-control input-sm" placeholder="Blueprint name..." maxlength="248" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>
                                Description
                            </label>
                            <textarea name="description" class="form-control input-sm" rows="5" placeholder="Blueprint name..." maxlength="1000" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>
                                Blueprint String
                            </label>
                            <textarea name="bp_string" class="form-control input-sm" rows="10" placeholder="Blueprint string..." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>
                                Image
                            </label>
                            <input type="file" name="file" class="form-control-file" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-sm">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection