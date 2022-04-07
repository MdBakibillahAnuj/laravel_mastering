@extends('master')

@section('title')
    FULL NAME
@endsection
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('get-full-name') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">First Name</lable>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">Last Name</lable>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">Result</lable>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="{{ isset($fullName) ? $fullName : '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label"></lable>
                                <div class="col-md-8">
                                    <input type="submit"  class="btn btn-success btn-block" value="Get Full Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
