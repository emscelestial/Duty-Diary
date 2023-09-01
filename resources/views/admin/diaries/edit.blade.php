@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Diary
        </div>
        <form action="{{route('diaries.update', $diary->id )}}" method="POST">
            @csrf
            <div class="card-body">
                    <div class="form-group">
                        <label for="plan_today">Today's Plan</label>
                        <textarea class="form-control" id="plan_today" name="plan_today" rows="3">{{ $diary->plan_today }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="eod">End of Day Report</label>
                        <textarea class="form-control" id="end_day" name="end_day" rows="3">{{  $diary->end_day }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="plan_tomorrow">Tomorrow's Plan</label>
                        <textarea class="form-control" id="plan_tomorrow" name="plan_tomorrow" rows="3">{{  $diary->plan_tomorrow }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="roadblocks">Roadblocks</label>
                        <textarea class="form-control" id="roadblocks" name="roadblocks" rows="3">{{  $diary->roadblocks }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary of the Day</label>
                        <textarea class="form-control" id="summary" name="summary" rows="3">{{  $diary->summary }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="supervisor">Supervisor</label>
                        <select name="supervisor_id" id="supervisor" class="custom-select">
                            <option value="" selected disabled>Select Supervisor</option>
                            @if (isset($supervisors))
                                @foreach ($supervisors as $supervisor)
                                <option value="{{ $supervisor->id }}" {{ $supervisor->id ==  $diary->supervisor_id ? 'selected' : '' }}>{{ $supervisor->name }}</option>
                                @endforeach
                            @endif

                        </select>
                    </div>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="p-0 m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            </div>
            @method('PUT')
            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-sm">Save</button>
                <a href="{{ back()->getTargetUrl() }}" class="btn btn-secondary btn-sm">Cancel</a>
            </div>
        </form>
    </div>

@endsection
