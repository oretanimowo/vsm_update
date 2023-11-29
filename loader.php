<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #ecf0f1;
        }
        .load{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
        }
        .load hr{
            border: 0;
            margin: 0;
            width: 35%;
            height: 35%;
            border-radius: 50%;
            position: absolute;
            animation:  spin 2s ease infinite;
        }
        .load :first-child{
            background-color: #19a68c;
            animation-delay: -1.5s;
        }
        .load :nth-child(2){
            background-color: #f63d3a;
            animation-delay: -1s;
        }
        .load :nth-child(3){
            background-color: #fda543;
            animation-delay: -.5s;
        }
        .load :last-child{
            background-color: #193b48;
            animation-delay: 0s;
        }
        @keyframes spin{
            0%, 100%{
                transform: translate(0);
            }
            25%{
                transform: translate(160%);
            }
            50%{
                transform: translate(160%, 160%);
            }
            75%{
                transform: translate(0, 160%);
            }
        }
    </style>
</head>
<body>
    <div class="load">
        <hr>
        <hr>
        <hr>
        <hr>
    </div>

</body>
</html>