<!DOCTYPE html>
<html>
<head>
    
    <title>Student Management System</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('content')

    </div>
</body>
</html>

<style>
    .student-headline{
      
       color: darkblue;
      
       text-align: center;
    }

    .create-new-student{
        background-color: wheat;
       margin-top: 20px;
       margin-bottom: 20px;
        display: inline-block;
        padding: 10px 10px;
        border-radius: 10px;
        text-decoration: none;
        text-align: center;

    }

    
    .back-form-container{
       
        
       background-color: lightseagreen;
       padding: 10px 10px;
        border-radius: 5px;
        /* margin-left: 730px;
        margin-bottom: 10px;
        margin-top: 30px;  */

    }

    .stud-design{
        color: black;
        margin-top: 40px;
        text-align: center;
        }

        .course-design{
            color:black;
            margin-top: 40px;
            text-align: center;
        }

        .fee-design{
            color: black;
             margin-top: 40px;
            text-align: center;
        }

        .btn-form-container{
           
             background-color: limegreen;
             padding: 10px 10px; 
             border-radius: 10px;
            /* text-align: center; */
             margin-left: 500px;
            margin-top: 40px; 
           
        }
        .delete-btn-container{
           background-color:orangered;
           border-radius: 10px;
        }

       

        .form-design{
            background-color: lightsalmon;
            padding: 50px 50px;
        
            margin-top: 30px;
           margin-left: 200px;
           margin-right: 200px;
        }

    

        table{
            border: 2px solid black;
            border-collapse: collapse;
            width: 80%;
        }

        th{
            background-color: wheat;
            color: black;
            height: 30px;
            vertical-align: middle;
        }

th,td{
    border: 2px solid black;
    padding: 5px;
    text-align: center;
}
 tr:hover{
     background-color: lightsalmon;
 }

 tr:nth-child(even){
     background-color: lightgray;
 }

 .edit-product{
     text-align: center;
     color: darkblue;
 }

 
</style>