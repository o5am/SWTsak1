<!DOCTYPE html>
<html lang="en">
<head>
    <
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- @vite(['resources/css/student.css', 'resources/js/app.js'])-->
   <title>tasksw</title>

</head>
<body>
<style>
    body {
    background-color: #2f1c3a;
    color:#f15a29;
  }
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 600px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    margin-left: 450px;
    margin-top: 100px;
}
.styled-table thead tr {
    background-color: #50566e;
    color: #ffffff;
    text-align: left;
}
a{
    color:#c2dbf7;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}



.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color:#f15a29;
}
.title{
    margin-left: 512px;
    color:#f15a29;
    font-weight: bold;
    font-size: 50px;
    margin-top: 15px;  
}
.title2{
    margin-left: 680px;
    color:#f15a29;
    font-weight: bold;
    font-size: 50px;
    margin-top: 15px;  
}
.styled-table tbody tr:hover  {background-color: #f15a29;cursor: pointer;}
</style> 
    <p class="title"> Students Information</p>
    <table class="styled-table">
    <thead>
        <tr>
            <th>ID_Student</th>
            <th>Name_Student</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($students as $student)

            <td>  
                <a style ="text-decoration: none ; font-weight: bold;" href ='/information/{{ $student ["id"] }}' >
             {{ $student ['id'] }} </a>
               </td>
            <td> <a style ="text-decoration: none ;font-weight: bold;" href ='/information/{{ $student ["id"] }}' >{{ $student ['name'] }}</td>
            </a>
            
        </tr>
        @endforeach

        <tr class="active-row">
            <td style="color : white">by : Osama-Mostafa(OMA)</td>
            <td style="color : white">200115</td>
        </tr>
        <!-- and so on... -->
    </tbody>
</table>

    
</body>

</html>