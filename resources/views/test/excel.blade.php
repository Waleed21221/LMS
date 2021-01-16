<html>
    <head>
        <title>Bulk insertion</title>
    
    </head>

    <body>
        <form action="{{url('/import')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field}}
            <h2>Select Excel to upload</h2>
            <input type="file" name="file" id="file">
            <br><br>
            <button type="submit">Uploa file</button>
            <br><br><br>

            <a href="{{url('/sample/student.xlsx')}}">Download file</a>
        </form>
    </body>

</html>