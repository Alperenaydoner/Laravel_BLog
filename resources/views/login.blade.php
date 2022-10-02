
<!doctype html>
   <html>
   <head>
      <meta charset="utf-8">
      <title>Blog</title>
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


   </head>

   <body>
     <div id="ust">
       <div id="header">
          
       </div>     <!--header kapanış--->

    </div>         <!--ust kapanış---->
    <form action="/giris" required="" method="POST" >
   @csrf
      İsim :<input type="text" name="name" required=""  ><br>
      Mail: <input type="email" name="mail" required=""  ><br>
      Sifre: <input type="password" name="sifre" required=""><br>
      <button type="submit" name="giris">Giriş Yap</button><br>
      <button type="submit" name="ekle">Kaydol</button>
   </div>
</form>



</body>
</html>
