<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queen Land </title>
    <style>
        .header{
            background: #f7c800;
            padding: 15px;
        }
        h3 span{
            font-size: 15px;
        }
        h3{
            line-height: 15px;
        }
        p{
            border: 1px solid #f7c800;
            padding: 15px;
            font-weight: 600;
            margin-top: -12px;
            font-size: 15px
        }
        img{
            width: 40px;
            float: left;
        }
    </style>
</head>
<body dir="rtl">
    <h2 class="header"> Queen Land </h2>

    <h3>   بريد إلكترونى المرسل :   <span>   {{ $dataReceived['email'] }} </span> </h3>

   <h3>   أسم الشخص المرسل :  <span>     {{ $dataReceived['name'] }} </span> </h3>

    <h3>   رقم التليفون : <span>   {{ $dataReceived['phone'] }} </span></h3>

    <h3>   الرسالة :</h3>
    <p>
        {{ $dataReceived['message'] }}
    </p>

</body>
</html>
