@include('template.library')
@include('template.upload')
<div>
    <div class="container-fluid newmodal-dialog">
        <div class="newmodal-content">
            <div class="modal-body">
                <form method="" action="">
                    <h3>LOGIN</h3><br>
                    Username<br>
                    <input type="text" name="username" class="myinput"><br>
                    <div class="pass-field">
                    Password<br>
                    <input type="Password" name="password" class="myinput">
                    </div><br>
                    <center><button type="submit" name="submit" class="log-btn">Log In</button></center><br>
                </form>
                    Lost your Password?<br>
                    <h4 class="spacer-5">Connect with:</h4><br>
                    <button type="button" class="google-button">
                    <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
                    </button>
            </div>
        </div>
    </div>
</div>
