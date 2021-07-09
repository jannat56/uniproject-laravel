@extends('students.layout')


@section('content')

<div class="student-headline">
    <h2>Student Informations</h2>

</div>
<div class="create-new-student">
    
            <a href="{{ route('students.create') }}">Create New Student</a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message}}</p>

</div>
    
@endif

<table>
   
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th>Action</th>
        <th>Action</th>
        
        

    </tr>

   

    @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->studname }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->fee }}</td>
            
            <td>
                <a href="{{ route('students.edit',$student->id) }}">Edit</a>
                {{-- <button type="submit" class="edit-btn-container">Edit</button> --}}
            </td> 
            
            
            <td>

            <form action="{{ route('students.destroy',$student->id) }}"method="POST">
            {{-- <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a> --}}
            {{-- <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a> --}}

            @csrf

            @method('DELETE')

            <button type="submit" class="delete-btn-container">Delete</button>
            
            


        </form>


            </td>
        

            

        </tr>
    @endforeach

    </table>