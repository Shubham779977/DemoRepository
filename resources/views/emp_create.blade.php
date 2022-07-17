<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
       <title>Employee login</title>
 
       
    </head>
    <body>
        <form action = "/show" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <label for="name">Name</label>
         <input type="text"  name="name"><br>
         <label for="email">Email</label>
         <input type="email"  name="email"><br>
         <label for="password">Password</label>
         <input type="password"  name="password"><br>
         <button type="submit">Submit</button>
      </form>
    </body>
</html>
