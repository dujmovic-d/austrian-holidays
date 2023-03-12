@extends('components.layout')

@section('content')
<!-- Create Form for updating holiday information and sending it to Update Function -->
    <form action="{{ route('holidays.update', $holiday) }}" method="POST">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row text-center">
            <div>
                <label for="holidayName">Holiday Name</label>
            </div>
            <!-- Prefill Holiday Name -->
            <input type="text" required name="holidayName" value="{{ old('holidayName', $holiday->name) }}">
        </div>

        <div class="row text-center">
            <div>
                <label for="holidayDate">Holiday Date</label>
            </div>
                        <!-- Prefill Holiday Date -->
            <input type="date" required name="holidayDate"
                value="{{ old('holidayDate', implode('-', $holiday->date)) }}">
        </div>
        <div class="row text-center">
            <button type="submit">Save Holiday</button>
        </div>
    </form>
@endsection
