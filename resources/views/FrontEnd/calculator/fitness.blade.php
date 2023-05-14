@extends('layouts.FrontEndMaster')
@section('FrontTitle', 'Fitness Calculator - HealthyBotic')
@section('FrontEnd')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Body Fat Calculator</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('FrontEndCalculator.FitnessCal') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <label>Weight (kg)</label>
                                <input type="text" class="form-control" name="weight">
                                <br>
                                <label>Waist circumference (cm)</label>
                                <input type="text" class="form-control" name="waist">
                                <br>
                                <label>Hip circumference (cm)</label>
                                <input type="text" class="form-control" name="hip">
                                <br>
                                <label>Neck circumference (cm)</label>
                                <input type="text" class="form-control" name="neck">
                                <br>
                                <label>Sex</label>
                                <select name="sex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <br>
                                <label>Age</label>
                                <input type="text" class="form-control" name="age">
                                <br>
                                <button type="submit" class="btn btn-info">Calculate Body Fat Percentage</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4>md4</h4>
            </div>
        </div>
    </div>

@endsection
