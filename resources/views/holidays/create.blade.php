@extends('components.layout')

@section('content')
    <div class="container text-center">

        <div class="row justify-content-center">
            <div class="col-6">

                <!-- Create Form for sending new holiday to Store Method and creating the Holiday -->
                <form action="{{ route('holidays.store') }}" method="POST">
                    @csrf
                    <div class="row text-center mb-2">
                        <div>
                            <label for="holidayName">Holiday Name</label>
                        </div>
                        <input type="text" required name="holidayName" placeholder="Christmas">
                    </div>

                    <div class="row text-center mb-2">
                        <div>
                            <label for="holidayDate">Holiday Date</label>
                        </div>
                        <input type="date" required name="holidayDate">
                    </div>
                    <div class="row text-center mb-1">
                        <button class="btn btn-dark btn-outline-secondary text-white" type="submit">Save Holiday</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
