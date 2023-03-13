@extends('components.layout')

@section('content')
    <table class="table table-dark">
        <thead>
            <th scope="col" class="col-3">Name</th>
            <th scope="col" class="col-3">Date</th>
            <th scope="col" colspan="2" class="text-center">
                <!-- Routes to Create Function in Controller which shows Holiday Creation Form -->
                <form action="{{ route('holidays.create') }}">
                    <button class="col-12 btn btn-dark btn-outline-secondary text-white" type="submit">Create new Holiday</button>
                </form>
            </th>
        </thead>
        <tbody>
            @foreach ($holidays as $holiday)
                <tr>
                    <!-- Show name of holiday -->
                    <td>{{ $holiday->name }}</td>
                    <!-- Concatenate Date from fields -->
                    <td>{{ implode('.', array_reverse($holiday->date)) }}</td>
                    <td class="col-3">
                        <!-- Create a button which routes to Edit Function in Controller with selected holiday id as value -->
                        <form action="{{ route('holidays.edit', $holiday) }}">
                            @csrf
                            <button class="col-12 btn btn-dark" type="submit"> Edit Holiday
                            </button>
                        </form>
                    </td>
                    <td class="text-end col-3">
                        <!-- Create a button which routes to Destroy Function in Controller with selected holiday id as value -->
                        <form action="{{ route('holidays.destroy', $holiday) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="col-12 btn btn-dark" type="submit"> Delete Holiday</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
