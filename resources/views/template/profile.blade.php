@include('template/library')
<div>
    <div class="container-fluid newmodal-dialog">
        <div class="newmodal-content">
            <div class="modal-body">
                <form action="" method="">
                <h3>Change Account Details</h3><br>
                <input type="text" name="username" class="myinput" id="name_edit1" placeholder="<?php echo "username"; ?>" style="width: 86%;" disabled>
                <input type="button" class="e_btn" id="e_btn1" value="Edit"><br>
                <div class="pass-field"><br>
                <input type="email" name="email" class="myinput" id="name_edit2" placeholder="<?php echo "Email id"; ?>" style="width: 86%;" disabled>
                <input type="button" class="e_btn" id="e_btn2" value="Edit"><br>
                </div><br>
                <div class="spacer">
                <input type="Password" name="password" class="myinput" id="name_edit3" placeholder="<?php echo "password"; ?>" style="width: 86%;" disabled>
                <input type="button" class="e_btn" id="e_btn3" value="Edit"><br>
                </div>
                <div class="spacer"><br>
                <input type="Password" name="c-password" class="myinput" id="name_edit4" placeholder="<?php echo "Re-enter password"; ?>" style="width: 86%;" disabled>
                <input type="button" class="e_btn" id="e_btn4" value="Edit"><br>
                </div><br>
                <center><button type="submit" name="submit" class="save-btn">Save Changes</button></center><br>
                </form>
            </div>
        </div>
    </div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#e_btn1').click(function(){
			document.getElementById("name_edit1").disabled = false;
		});
	});
	$(document).ready(function(){
		$('#e_btn2').click(function(){
			document.getElementById("name_edit2").disabled = false;
		});
	});
	$(document).ready(function(){
		$('#e_btn3').click(function(){
			document.getElementById("name_edit3").disabled = false;
		});
	});
	$(document).ready(function(){
		$('#e_btn4').click(function(){
			document.getElementById("name_edit4").disabled = false;
		});
	});
	</script>
</div>