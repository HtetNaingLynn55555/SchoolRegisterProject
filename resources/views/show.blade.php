@extends('layout')

@section('content')

        <div class="container">

            <table class="table mt-5">
                <thead>
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Class</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>


                <tr>

                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->greates->grate}}</td>
                    <td><a href="/home/{{$student->id}}/edit" class="btn btn-outline-dark"> Edit</a></td>
                    <td> <form action="/home/{{$student->id}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <button type="submit" class="btn btn-outline-danger"> Delete </button>

                        </form>
                    </td>
                </tr>



                </tbody>
            </table>

            <a href="/home" class="btn btn-outline-primary">Home</a>

        </div>

@endsection
