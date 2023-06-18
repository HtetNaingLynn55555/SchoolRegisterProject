@extends('layout')


@section('content')

    <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form action="/home" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control"  placeholder="Enter Your Email Here">

            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" >
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Enter Your Age</label>
                <input type="number" max="100" min="1" name="age" class="form-control" >
            </div>

            <div class="mb-3">
                <select name="gender" class="form-control">
                    <option  value="">Select Gender</option>
                    <option  value="Male">Male</option>
                    <option  value="Female" >Female</option>
                </select>
            </div>

            <div class="mb-3">
              <select name="grates_id" class="form-control">
                  <option value="" >What is Your Class Room</option>
                  @foreach ($greate as $class )
                    <option value="{{$class->id}}">{{$class->grate}}</option>
                  @endforeach
              </select>
          </div>



            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/home" class="btn btn-primary">Back</a>
          </form>

    </div>

@endsection
