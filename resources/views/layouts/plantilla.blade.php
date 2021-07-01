<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body background="https://i.imgur.com/lYNiUbj.jpeg">
    <center>
    <table style="text-align: center; background-color: rgb(232, 232, 232); width: 70%;" border="1"
    cellpadding="2" cellspacing="2">
     <tbody>
       <tr>
         <td style="text-align: left"; colspan="3" rowspan="1"><img style="width: 199px; height: 120px;" alt="Logoxd" src="https://i.imgur.com/S8ivLnT.png"></td>
       </tr>
       <tr>
         <td><a href="productos">INICIO</a></td>
         <td><a href="productos">MENU</a></td>
         <td><a href="Sobrenosotros">SOBRE NOSOTROS</a></td>
       </tr>
     </tbody>
   </table>
    </center>
   

    @yield('content')
    <center>
      <table style="text-align: center; width: 70%;background-color: rgb(232, 232, 232);  " border="1" cellpadding="20" cellspacing="2">
        <tbody>
          <tr>
           <td><img style="width: 199px; height: 120px;" alt="Logoxd" src="https://i.imgur.com/S8ivLnT.png"></td>
          </tr>
        </tbody>
      </table></center>
</center>


</body>
</html>