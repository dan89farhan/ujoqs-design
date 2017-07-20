@include('template.library')
@include('template.upload')
<div>
    <div class="container-fluid newmodal-dialog">
        <div class="newmodal-content">
            <div class="modal-body">
                <form action="" method="">
                <h3>REGISTER</h3><br>
                Username<br>
                <input type="text" name="username" class="myinput"><br>
                <div class="pass-field">
                Email Id<br>
                <input type="email" name="email" class="myinput">
                </div><br>
                <div class="spacer">
                Password<br>
                <input type="Password" name="password" class="myinput">
                </div><br>
                <div class="spacer">
                Confirm Password<br>
                <input type="Password" name="c-password" class="myinput">
                </div><br>
                <center><button type="submit" name="submit" class="log-btn">Register</button></center><br>
                </form>
            </div>
        </div>
    </div>
</div>
