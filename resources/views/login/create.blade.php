<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class=""  method="POST">
            {{ csrf_field() }}
            <input type="text" name="email" value="">
            <button type="submit" name="button">Sign In</button>
        </form>
    </body>
</html>
