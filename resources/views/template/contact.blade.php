@include('template.library')
@include('template.upload')
<div>
    <div class="container-fluid newmodal-dialog">
        <div class="newmodal-content">
            <div class="modal-body">
                <form action="" method="">
                <h3>CONTACT US</h3><br>
                Name<br>
                <input type="text" name="your_name" class="myinput"><br>
                <div class="pass-field"><br>
                Email<br>
                <input type="email" name="your_email" class="myinput">
                </div><br>
                <div class="spacer">
                Contact Number<br>
                <input type="number" name="your_number" class="myinput">
                </div><br>
                <div class="spacer">
                Message<br>
                <textarea class="myinput" style="border: 1px solid darkgray"></textarea>
                </div><br>
                <center><button type="submit" name="send" class="log-btn">Submit</button></center><br>
                </form>
            </div>
        </div>
    </div>
</div>
