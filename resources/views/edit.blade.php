<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="user-name">
    <div class="edit" >
<form action="home">
            <button class="b2">Back</button>
        </form></div>
    @if(session()->has('name'))
        <p>Hello, {{ session('name') }}</p>
        <img src="bot.png" alt="" srcset="" width="5%" heigt="5%">
    @endif 
</div>

<div class="bu">
  
        <form action="{{ route('edit.post') }}" method="post">
            @csrf
            <div class="forms">
            <div class="date">
                <input type="date" id="date" name="date-edit">
            </div>
            <div class="space"></div>
            <div class="todo">
                <input type="text" name="todo-edit" id="todo-edit">
            </div></div>
            <div class="sbutton">
            <button class="b1" type="submit">Edit-Now</button></div>

        </form>
      
        <style>
    .edit{
        width:80%;
         height:60%;
         display:flex;
    justify-content:start;
    align-items:center;
    }
    .edit button{
        background-color:red;
        width:10%;
        height:50%;
        border-radius:.2vw;
    border:none;
    color:white;
    }
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    text-decoration: none;
  }
  body{
    background-color:black;
    color:white;
  }
  .user-name{
    width:100%;
    height:8vw;
    font-size:1.5vw;
    display:flex;
    justify-content:end;
    align-items:center;
  }
  form{
    width:100%;
height:100%;



}
.forms{
    width:100%;
    height:30%;
    display:flex;
    justify-content:center;
    align-items:center;
}
.forms .date{
    width:10%;
    height:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    
}
.forms .todo{
    width:70%;
    height:50%;
    display:flex;
    justify-content:center;
    align-items:center;
}
.forms .date input{
    width:100%;
    height:100%;
    font-size:1.5vw;
    border-radius:.2vw;
    border:none;
}
.forms .todo input{
    width:100%;
    height:100%;
    font-size:1.5vw;
    border-radius:.2vw;
    border:none;
}
.space{
    width:2vw;
}
.sbutton{
    width:100%;
    height:70%;
    
    display:flex;
    justify-content:center;
    align-items:start;
}
.sbutton button{
    width:50%;
    height:20%;
    background-color:green;
    border:none;
    border-radius:.2vw;
    cursor: pointer;
    font-size:1.5vw;
    font-weight:bolder;
}
.bu{
    width:100%;
    height:20vw;
    display:flex;
    justify-content:center;
    align-items:center;
    
}
.list{
    width:100%;
    height:10vw;

    display:flex;
    justify-content:center;
    align-items:center;
    
}
.li{
    width:60%;
    height:50%;
    border:1px solid white;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:1.5vw;
}
.li .button{
    width:20%;
    height:100%;
    display:flex;
    justify-content:end;
    align-items:center;
}
.li .button button{
    width:80%;
    height:60%;
    border:none;
    border-radius:.2vw;
    cursor: pointer;
    font-size:1.5vw;
    font-weight:bolder;
    background-color:red;
    color:white;
}
.text{
    width:60%;
    height:80%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:1.8vw;

}
@media(max-width:800px)
{
    .user-name{
    width:100%;
    height:16vw;
    font-size:1.5vw;
    display:flex;
    justify-content:end;
    align-items:center;
  }
  .user-name p{
font-size:3vw;
width:20%
  }
  .user-name img{
    width:10%;
  }
  .user-name button{
    width:30%;
    height:50%;
  }
 /*  .forms{
    width:100%;
    height:60%;
  } */
  .bu{
    height:50vw;
    
  }
  .forms .date input{
width:100%;
font-size:2.8vw;
  }.forms .date{
    width:20%;
   
  }
  .forms .todo input{
width:100%;
font-size:2.8vw;
  }
  .li .button button{
    
  }
  .sbutton button{
    font-size:2.8vw;
  }
  .list{
    height:20vw;
    width:100%;
  }
  .li{
    width:80%;
    
  }
  .text{
    font-size:2.85vw;
  }
  .li .button{
    width:30%;
}
.li .button button{
    font-size:2.8vw;
}
}
</style>
</div>
</body>
</html>