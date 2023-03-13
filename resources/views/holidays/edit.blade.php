@extends('components.layout')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <!-- Create Form for updating holiday information and sending it to Update Function -->
                <form action="{{ route('holidays.update', $holiday) }}" method="POST">
                    @csrf
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="row text-center mb-2">
                        <div>
                            <label for="holidayName">Holiday Name</label>
                        </div>
                        <!-- Prefill Holiday Name -->
                        <input type="text" required name="holidayName" value="{{ old('holidayName', $holiday->name) }}">
                    </div>

                    <div class="row text-center mb-2">
                        <div>
                            <label for="holidayDate">Holiday Date</label>
                        </div>
                        <!-- Prefill Holiday Date -->
                        <input type="date" required name="holidayDate"
                            value="{{ old('holidayDate', implode('-', $holiday->date)) }}">
                    </div>
                    <div class="row text-center mb-2">
                        <button class="btn btn-dark btn-outline-secondary text-white" type="submit">Save Holiday</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
