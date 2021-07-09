@extends('students.layout')


@section('content')



    {{-- <div class="back-form-container"> --}}

       
            {{-- <a href="{{ route('students.index') }}">Back</a> --}}

        {{-- </div> --}}
  
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



            <form class="form-design" action="{{ route('students.store') }}"method="POST">
           

            @csrf

            
                    <div class="stud-design">

                        <strong>StudentName:</strong>

                        <input type="text" name="studname" class="form-control" placeholder="studname">

                    </div>
               
               
                    <div class="course-design">

                        <strong>Course</strong>

                        <input type="text" name="course" class="form-control" placeholder="course">
                    </div>
              
               
                    <div class="fee-design">

                        <strong>Fee</strong>

                        <input type="text" name="fee" class="form-control" placeholder="fee">
                   
                </div>

                <div>
                    <button class="btn-form-container" type="submit">Submit
                        


                    </button>
                    
                    <button class="back-form-container" type="submit">Back
                        


                    </button>
                    
                    {{-- <a class="back-form-container" href="{{ route('students.index') }}">Back</a> --}}


                </div>
               
          



           

        </form>

            
    @endsection

    <style>

    </style>



   