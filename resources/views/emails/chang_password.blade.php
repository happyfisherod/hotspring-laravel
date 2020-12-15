<html>
<head>
    <style>
        p {
            font-size: 16px;
            color: #000;
        }
    </style>
</head>
<body>
    <h3 style="text-align:center;">Change Password</h3>
<p>
   Click the bellow link to reset your password: 
</p>
<p><a herf="{{ url('ch_forgot_pass/'.$token) }}">click here</a></p>
</body>
</html>