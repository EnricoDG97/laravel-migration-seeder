@extends('layouts.app')

@section('content')
    <div class="container mt-5 text-center bg-dark mb-5 pb-4">
        <h1 class="text-light pt-5">LISTA TRENI</h1>
        <hr>
        <h2 class="p-4 text-uppercase text-light">treni in partenza in data odierna:</h2>
        <div class="container">
            <table class="table">
                <thead>
                    <tr class="text-uppercase text-light">
                        <th scope="col"> train code </th>
                        <th scope="col"> company </th>
                        <th scope="col"> departure station </th>
                        <th scope="col"> arrival station </th>
                        <th scope="col"> departure time</th>
                        <th scope="col"> in time </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row"> {{ $train->train_code }}</th>
                            <td> {{ $train->company }} </td>
                            <td> {{ $train->departure_station }} </td>
                            <td> {{ $train->arrival_station }} </td>
                            <td> {{ $train->departure_time }} </td>
                            <td> {{ $train->in_time }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
