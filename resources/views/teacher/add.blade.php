<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div{
            height:50%;
            margin-top:5%;
            width: 50%;
            /* border:1px solid black; */
            box-shadow:1px 1px 4px gray;
            margin-left:26%;
        }
        .input{
            border:1px solid black;
            margin:10px;
            padding: 7px 10px;
            display:block;
            margin-left:30%;
              border-radius:4px;
        }
        .option{
            width: 41%;
            margin:10px;
              padding: 7px 10px;
              margin-left:30%;
                border-radius:4px;
        }
        .h1{
            color:blue;
            text-align:center;
            font-family:sans-serif;
            padding:16px 0 0 0;
        }
        .btn{
            padding: 10px 15px;
            margin:10px;
            background-color:blue;
            color:white;
            border-radius:4px;
            margin-left:30%;
            border:none; 
            width: 41%;

        }
        .btn:hover{
            cursor:pointer;
        }
        .file{
            width: 38%;
            margin:10px;
            border:1px solid black;
            display: block;
             margin-left:30%;
                 padding: 7px;
                   border-radius:4px; 
        }
    </style>
</head>
<body>
    <div class="div">

        <form action="" method="post">
            <h1 class="h1">Add Teachers</h1>
         <input type="text" class="input" placeholder="your name">
         <input type="text" class="input" placeholder="your name">
         <select name="" id="" class="option">
           @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
           @endforeach
         </select>
         <input type="file" accept="image/*" class="file">
         <input type="submit" value="Save" class="btn">
        </form>
    </div>
</body>
</html>
