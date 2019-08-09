<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Hello {{$name}},</p>
        <p>You have a new contact form submission from {{$from}} at <a href="mailto:{{$fromAddress}}">{{$fromAddress}}</a>.</p>
        
        <p style="background-color:gainsboro;">{{$messageBody}}</p>
        <p style="font-weight:bold;">Please respond to their email address and not to this message.</p>
        <p>
           <a href="https://hullsangels.com">hullsangels.com</a>
        </p>
        <p style="font-size:12px;color:darkgray;">This is an automated email from an unmonitored inbox. Please do not respond to this email.</p>
    </body>
</html>