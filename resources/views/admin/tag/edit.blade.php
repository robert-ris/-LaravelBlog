@extends('layouts.backend.app')

@section('title', 'Tag')

@push('css')

@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               EDIT TAG
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control" name="name" value="{{ $tag->name }}">
                                            <label class="form-label">Tag Name</label>
                                        </div>
                                    </div>

                                    <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.tag.index') }}">BACK</a>
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush
