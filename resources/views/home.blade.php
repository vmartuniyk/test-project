@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped table-dark">

            <thead>
            <tr>
                <th scope="col">@sortablelink('id')</th>
                <th scope="col">@sortablelink('age')</th>
                <th scope="col">@sortablelink('eyeColor')</th>
                <th scope="col">@sortablelink('name')</th>
                <th scope="col">@sortablelink('gender')</th>
                <th scope="col">@sortablelink('company')</th>
                <th scope="col">@sortablelink('email')</th>
                <th scope="col">@sortablelink('phone')</th>
                <th scope="col">@sortablelink('address')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{ $contact->id }}</th>
                    <td>{{ $contact->age }}</td>
                    <td>{{ $contact->eyeColor }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->gender }}</td>
                    <td>{{ $contact->company }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                </tr>

            @endforeach



        </tbody>

    </table>
    {{ $contacts->links() }}
</div>



@endsection
