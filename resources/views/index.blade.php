<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
            <div class="row">
                <div class="col-12">
                <table class="table table-hover table-striped">
            <thead style="background-color: grey;">
                <tr>
                    <th>Task Name</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Deadline</th>
                   
                    
                </tr>
            </thead> 
            <tbody>
                   @foreach($tasks as $task)
                   <tr>
                        <td>{{$tasks->fullname}}</td>
                        <td>{{$tasks->email}}</td>
                        <td>{{$tasks->phone}}</td>
                        <td>{{$tasks->address}}</td>
                        <td>{{$tasks->city}}</td>
                    
                   </tr>
                   @endforeach
                   <tr>
                    <td colspan="8" class="text-right">
                        {!! $tasks->links() !!}                        

                    </td>
                   </tr>
            </tbody>
        </table>
                </div>
            </div>
        </div>
       
</body>
</html>