@extends('students.layout')


@section('content')



    <div class="edit-product">

        <h2>Edit Product</h2>

            </div>

        <div>
            <a href="{{ route('students.index') }}"></a>

        </div>
    </div>


</div>

@if ($errors->any())
<div class="alert alert-danger">
    
    <strong>Whoops</strong> some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>
            
        @endforeach
    </ul>


    
@endif



            <form class="form-design"action="{{ route('students.update',$student->id) }}"method="POST">
           

            @csrf
            @method('PUT')

            
                
                    <div class="stud-design">

                        <strong>StudentName:</strong>

                        <input type="text" name="studname" value="{{ $student->studname }}" class="form-control" placeholder="Name">

                    </div>
              
               
                    <div class="course-design">

                        <strong>Course</strong>

                        <input type="text" name="course" value="{{ $student->course }}" class="form-control" placeholder="Course">
                    
                </div>

              
                    <div class="fee-design">

                        <strong>Fee</strong>

                        <input type="text" name="fee" value="{{ $student->fee }}" class="form-control" placeholder="Fee">
                   
                </div>

                <div>
                   
                    <button type="submit" class="btn-form-container">Submit</button>
                    <button type="submit" class="back-form-container">Back</button>


                </div>
               
            </div>



           

        </form>

            
    @endsection

   