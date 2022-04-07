@extends('master')

@section('title')
    CALCULATOR
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">First Number</lable>
                                <div class="col-md-8">
                                    <input type="number" name="first_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">Last Number</lable>
                                <div class="col-md-8">
                                    <input type="number" name="last_name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">Options</lable>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="option" value="+">ADD</label><br/>
                                    <label for=""><input type="radio" name="option" value="-">SUB</label><br/>
                                    <label for=""><input type="radio" name="option" value="*">MUL</label><br/>
                                    <label for=""><input type="radio" name="option" value="/">DIV</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label">Result</lable>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <lable for="" class="col-md-4 col-form-label"></lable>
                                <div class="col-md-8">
                                    <input type="submit"  class="btn btn-success btn-block" value="Get Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
