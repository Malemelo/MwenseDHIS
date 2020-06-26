@extends('layouts.admin')
@section('content')

    <section id="info-tabs-">
        <div class="row">
            <div class="col-12">
                <div class="card icon-tab">
                    <div class="card-header">
                        <h4 class="card-title">Add New Non Communicable Disease</h4>
                    </div>
                    <div class="card-content mt-2">
                        <div class="card-body">
                            <form method="POST" action="{{ action('NonCommunicableController@store') }}" class="wizard-horizontal">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Disease Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter disease name" required="" data-validation-required-message="This name field is required" aria-invalid="false">
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" type="submit">Save Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

