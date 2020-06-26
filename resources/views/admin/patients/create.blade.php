@extends('layouts.admin')
@section('content')

    <section id="info-tabs-">
        <div class="row">
            <div class="col-12">
                <div class="card icon-tab">
                    <div class="card-header">
                        <h4 class="card-title">Add New Patient</h4>
                    </div>
                    <div class="card-content mt-2">
                        <div class="card-body">
                            <form method="POST" action="{{ action('PatientController@store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="patient_name" class="form-control" placeholder="Enter full name" required="" data-validation-required-message="This full Name field is required" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="py-50">Additional & Contact Details</h6>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                                <label>Village</label>
                                                <select class="form-control" id="basicSelect" name="village_id">
                                                    <option selected>choose village</option>
                                                    @if($villages)
                                                        @foreach($villages as $village)
                                                            <option value="{{ $village->id }}">{{ $village->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                        </div>>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Landmark</label>
                                                <input type="text" name="landmark_location" class="form-control" placeholder="Enter Landmark" required="" data-validation-required-message="This landmark field is required" aria-invalid="false">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Nearest Health Facility</label>
                                                <select class="form-control" id="basicSelect" name="nearest_health_facility_id">
                                                    <option selected>choose facility</option>
                                                    @if($health_facilities)
                                                    @foreach($health_facilities as $health_facility)
                                                        <option value="{{ $health_facility->id }}">{{ $health_facility->name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Treatment Supporter</label>
                                                <input type="text" class="form-control" placeholder="Enter next of keen" name="next_of_keen">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Relationship to client</label>
                                                <select class="form-control" id="basicSelect" name="next_of_keen_relationship">
                                                    <option value="friend">Friend</option>
                                                    <option value="mother">Mother</option>
                                                    <option value="father">Father</option>
                                                    <option value="grandfather">Grand father</option>
                                                    <option value="grandmother">Grand mother</option>
                                                    <option value="husband">Husband</option>
                                                    <option value="wife">Wife</option>
                                                    <option value="brother">Brother</option>
                                                    <option value="sister">Sister</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="number" name="next_of_keen_phone" class="form-control" placeholder="+12345675">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date of birth</label>
                                                <input type="text" name="dob" class="form-control" placeholder="10/24/1984">

                                            </div>
                                        </div>



                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number" name="phone_number" class="form-control" placeholder="+12345675" >
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>Sex</label>
                                                    <select class="form-control" id="basicSelect" name="sex" >
                                                        <option selected>select sex</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <input type="number" hidden name="health_worker_id" class="form-control" value="{{ Auth::user()->id }}" >
                                    </div>
                                    <hr>
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
