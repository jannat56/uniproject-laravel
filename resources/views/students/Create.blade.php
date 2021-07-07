@extends('students.layout')


@section('content')


<div class="row">
    <div class="row-form-container">

        <div class="pull-left">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>

        </div>
    </div>

</div>

@if ($errors->any())
<div class="">
    
    <strong>Whoops</strong> some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>
            
        @endforeach
    </ul>

</div>
    
@endif



            <form action="{{ route('students.store') }}"method="POST">
           

            @csrf

            <div class="row">
                <div class="">
                    <div class="form-group">

                        <strong>StudentName:</strong>

                        <input type="text" name="studname" class="form-control" placeholder="studname">

                    </div>
                </div>
                <div class="course-form-container">
                    <div class="form-group">

                        <strong>Course</strong>

                        <input type="text" name="course" class="form-control" placeholder="course">
                    </div>
                </div>
                <div class="fee-form-container">
                    <div class="form-group">

                        <strong>Fee</strong>

                        <input type="text" name="fee" class="form-control" placeholder="fee">
                    </div>
                </div>

                <div class="">
                    <button type="submit" class="btn btn-primary">Submit


                    </button>


                </div>
               
            </div>



           

        </form>

            
    @endsection

    <style>

    </style>



   