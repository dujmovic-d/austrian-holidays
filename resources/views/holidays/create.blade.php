@extends('components.layout')

@section('content')
<!-- Create Form for sending new holiday to Store Method and creating the Holiday -->
    <form action="{{ route('holidays.store') }}" method="POST">
        @csrf
        <div class="row text-center">
            <div>
                <label for="holidayName">Holiday Name</label>
            </div>
            <input type="text" required name="holidayName" placeholder="Christmas">
        </div>

        <div class="row text-center">
            <div>
                <label for="holidayDate">Holiday Date</label>
            </div>
            <input type="date" required name="holidayDate">
        </div>
        <div class="row text-center">
            <button type="submit">Save Holiday</button>
        </div>
    </form>
@endsection
