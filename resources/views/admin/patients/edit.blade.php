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
                            <form method="POST" action="{{ url('/update_patients/'.$patient->id)}}">
                                @method('PATCH')
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="patient_name" class="form-control" value="{{old('patient_name') ?? $patient->patient_name}}">
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
                                            <select class="form-control" id="basicSelect" name="village_id" value="{{old('village_id') ?? $patient->village_id}}">
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
                                            <input type="text" name="landmark_location" class="form-control" value="{{old('landmark_location') ?? $patient->landmark_location}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Nearest Health Facility</label>
                                            <select class="form-control" id="basicSelect" name="nearest_health_facility_id" >
                                                <option selected value="{{old('nearest_health_facility_id') ?? $patient->nearest_health_facility_id}}">{{old('nearest_health_facility_id') ?? $patient->health_facility->name}}</option>
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
                                            <input type="text" class="form-control" placeholder="Enter next of keen" name="next_of_keen" value="{{old('next_of_keen') ?? $patient->next_of_keen}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Relationship to client</label>
                                            <select class="form-control" id="basicSelect" name="next_of_keen_relationship" value="{{old('next_of_keen_relationship') ?? $patient->next_of_keen_relationship}}">
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
                                            <input type="number" name="next_of_keen_phone" class="form-control" placeholder="+12345675" value="{{old('next_of_keen_phone') ?? $patient->next_of_keen_phone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date of birth</label>
                                            <input type="text" name="dob" class="form-control" value="{{old('dob') ?? $patient->dob}}">

                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" name="phone_number" class="form-control" placeholder="+12345675" value="{{old('phone_number') ?? $patient->phone_number}}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Sex</label>
                                                <select class="form-control" id="basicSelect" name="sex" value="{{old('sex') ?? $patient->sex}}">
                                                    <option selected>select sex</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

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
