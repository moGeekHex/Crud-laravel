@extends('students.layout')

@section('content')
    <div class="pull-left">
        <h2>Student Crud Step By Step</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('students.create')}}">
                    Create new Student
                </a>    
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Course</th>
            <th>Fee</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($students as $student)
            <tr>
                <th>{{++$i}}</th>
                <th>{{ $student->studname }}</th>
                <th>{{ $student->course }}</th>
                <th>{{ $student->fee }}</th>
                <th>
                    <form action="{{route('students.destroy',$student->id) }}" method="POST">
                        <a class="btn btn-info" href="{{route('students.show',$student->id)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('students.edit',$student->id)}}">Edit</a>
                        
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>  
        @endforeach

    </table>
@endsection