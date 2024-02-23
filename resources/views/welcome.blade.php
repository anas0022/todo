<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="all">
    <div class="image">
    <img src="bot.png" alt="" srcset="" width="30%"></div>
    <div class="text">Welcome To Todo</div>
    <div class="buttons">
        <form action="register">
            <button>sign Up</button>
        </form>
        <div></div>
        <form action="login">
            <button>login</button>
        </form>
    </div></div>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        body{
            width:100%;
            height:45vw;
        background-color:black;
        display:flex;
        justify-content: center;
   align-items: center;
}
.all{
    width:100%;
    height:100%;
    display:grid;
    justify-content: center;
   align-items: center;
  
}
.image{
    width:100%;
    height:100%;

    display:flex;
    justify-content: center;
   align-items: end;
}
.buttons{
    width:100%;
    height:80%;
 
    display:flex;
    justify-content: center;
   align-items: start;
}
.buttons button{
    width:8vw;
    height:2vw;
    font-size:1.4vw;
    background-color:blue;
    color:white;
    border:none;
    border-radius:.2vw;
}
.buttons div{
    width:2vw;
}
.text{
    color:white;
    width:100%;
    font-size:2.5vw;
    display:flex;
    justify-content: center;
   align-items: center;
}
img{
        width:30%;
    }
    button{
        cursor: pointer;
    }
@media (max-width:1050px){
    body{
        height:140vw;
    }
    img{
        width:50%;
    
    }
    .text{
        font-size:7vw;
    }
    .buttons button{
        width:25vw;
        height:10vw;
        font-size:4vw;
    }
}

    </style>
</body>
</html>