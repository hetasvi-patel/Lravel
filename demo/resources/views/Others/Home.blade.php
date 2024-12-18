@extends('Template.Index')
    <style>

*{
    margin: 0;
    padding: 0;
}
.banner-area{
    background-image: url('https://images.unsplash.com/photo-1494500764479-0c8f2919a3d8?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYzNzU5MjE4OA&ixlib=rb-1.2.1&q=85');
    background-position: center center;
    background-size:cover ;
    /* -webkit-background-size:cover ; */
    height: 100vh;
    width: auto;
    margin: auto;
}
.menu{
    float: right;
    list-style: none;
    margin-top:30px;
}
.menu ul li{
    display: inline-block;
}
.menu ul li a{
    color: #fff;
    text-decoration: none;
    padding: 5px 20px;
    font-family: 'poppins' ,sans-serif;
    font-size: 16px;
}
.menu ul li a:hover{
    color: rgb(199, 139, 255);
}
/* .logo{
    height: 20%;
    float: left;
    color: azure;
    list-style: none;

} */
.banner-text{
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 20% 30%;
    text-align: center;
}
.banner-text h1{
    text-align: center;
    color:rgb(233, 185, 255);

    text-transform: uppercase;
    font-size: 60px;
    font-family: 'poppins' , sans-serif;
}
.banner-text p{
    color: #fff;
    font-size: 18px;
}
.banner-text a{
    border: 1px solid #fff;
    padding: 10px 25px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    margin-top: 20px;
    display: inline-block;
    color: #fff;
}
.banner-text a:hover{
    background-color: white;
    color: rgba(68, 25, 109, 0.623);
    font-weight: bold;
}
    </style>

    @section('body')
    <div class="banner-area">

  <div class="banner-text">
      <h1>HomePage Design</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic autem harum eaque aut deserunt pariatur eum
          ea, sequi minus nam veniam atque et quisquam molestiae aperiam! Iusto, ipsum.</p>
      <a href="#">Read More</a>
      <a href="#">Watch More</a>
  </div>
  
</div>
<div class="container mt-5">
    <center><h1>Database data display</h1><hr>
<table class="table table-hover table-striped">
    <thead class="bg-dark text-light">
        <tr>
            <th>ID</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Ip Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $datum)
        <tr>
            <td>{{$datum->id}}</td>
            <td>{{$datum->first_name}}</td>
            <td>{{$datum->last_name}}</td>
            <td>{{$datum->email}}</td>
            <td>{{$datum->gender}}</td>
            <td>{{$datum->ip_address}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection

</body>
</html>
