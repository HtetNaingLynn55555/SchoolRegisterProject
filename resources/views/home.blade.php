@extends('layout')

@section('content')


    <div class="container">

        <table class="table mt-5 bg-dark">
            <thead>
              <tr>

                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>

              </tr>
            </thead>
            <tbody>

               @foreach ($students as $student )
               <tr>

                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td> <a href="/home/{{$student->id}}" class="btn btn-outline-info"> View Details</a></td>
                <td><a href="/home/{{$student->id}}/edit" class="btn btn-outline-dark"> Edit</a></td>
                <td> <form action="/home/{{$student->id}}" method="POST">
                         @csrf
                        @method("DELETE")

                        <button type="submit" class="btn btn-outline-danger"> Delete </button>

                    </form>
                </td>
              </tr>
               @endforeach


            </tbody>
          </table>

          <a href="/home/create" class="btn btn-outline-primary">Register Students</a>


    </div>

@endsection
