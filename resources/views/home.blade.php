<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="user-name">
    @if(Auth::check())
        <div class="logout">
            <form action="{{ route('logout') }}">
                <button class="b2">Logout</button>
            </form>
        </div>
        <div class="edit">
            <form action="edit">
                <button class="b2">Edit List</button>
            </form>
        </div>
        <p>Hello, {{ session('name') }}</p>
        <img src="bot.png" alt="" srcset="" width="5%" height="60%">
    @endif 
</div>
<div class="bu">
  
        <form action="{{ route('home.post') }}" method="post">
            @csrf
            <div class="forms">
            <div class="date">
                <input type="date" id="date" name="date" >
            </div>
            <div class="space"></div>
            <div class="todo">
                <input type="text" name="todo" id="todo-list"placeholder="What Are you Up To">
            </div></div>
            <div class="sbutton">
            <button class="b1" type="submit">Submit</button></div>

        </form>
      
    
</div>

<div class="list">
    
   <div class="li" style="width:100%;">
    <div class="text"style="width:100%;">
    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    @if (isset($todos) && $todos->isNotEmpty())
    <ul style=" height:20vw; overflowY:scroll;  justyfy-content:center;">
        @foreach ($todos as $todo)
            <div class="ite">
                <p>Date: {{ $todo->date }} - {{ $todo->todo_list }}</p>
                <form action="{{ route('todo.delete', ['id' => $todo->id]) }}" method="POST" style=" display:flex;
    justify-content:center;
    align-items:center; width:20%;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="width:80%;">Delete</button>
                </form>
            </div>
        @endforeach
    </ul>
</div>
@else
    <p>No todos found.</p>
@endif
</div>
</div>
<style>
    .edit{
        width:80%;
         height:60%;
         display:flex;
    justify-content:start;
    align-items:center;
    }
    .edit button{
        background-color:orange;
        width:10%;
        height:50%;
        border-radius:.2vw;
    border:none;
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
ul{
    width:60%;
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

    display:flex;
    justify-content:center;
    align-items:center;
    font-size:1.5vw;
}


.text{
    width:60%;
    height:80%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:1.8vw;

}
ul .button{
    width:20%;
   
    height:100%;
}
ul .button button{
    width:20%;
   background-color:red;
    height:100%;
}
.ite{
    display:flex; 
    border:1px solid white; 
    width:100%; 
    height:4vw;
margin-top:2vw;
     display:flex;
    justify-content:center;
    align-items:center;
    border-radius:.4vw;
     
}
.ite p{
    width:70%;
    height:100%;
    float:left;
    display:flex;
    justify-content:center;
    align-items:center;
     font-size:1.8vw;
}
.ite button{
    width:20%;
    height:80%;
    float:right;
    color:white;
    background-color:red;
    font-size:1.5vw;
    border:none;
    border-radius:.2vw;
    cursor: pointer;
}
button{
    cursor: pointer;
}
.logout{
    width:10%;
    height:100%;
    display:flex;
    justify-content:center;
    align-items:center;
}
.logout form{
    width:80%;
    height:80%;
    display:flex;
    justify-content:start;
    align-items:start;
    
}
.logout form button{
    width:50%;
    height: 30%;
    background-color:red;
border:none;
border-radius:.2vw;
color:white;
}
.user-name p{
font-size:2vw;
width:15%
  }
@media(max-width:800px)


{
    .logout{
        width:30%; 
    }
    .logout form button{
        width:60%;
        font-size:2vw;
        color:white;
    }
    ul{
        width:80%
    }
    .ite{
    width:100%;
    height:8vw;
    border-radius:.8vw;
}
.ite p{
    font-size:2.8vw;
}
.ite button{
font-size:2.5vw;

}


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
width:30%
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
</body>
</html>