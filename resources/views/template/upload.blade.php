<div class="modal fade" id="myModal-1" role="dialog">
    <div class="container-fluid upload-dialog-1">
        <div class="upload-content">
            <div class="modal-body">
                <form method="" action="" class="form-layout">
                <h3 class="title-size">Upload Your Jokes</h3><br>
                <h4>What you are uploading?</h4>
                <input type="radio" name="category" value="joke" class="radio-btn first-btn">Joke
                <input type="radio" name="category" value="quote" class="radio-btn">Quote
                <input type="radio" name="category" value="shayari" class="radio-btn">Shayari<br> 
                <textarea name="text-post" id="files" class="myinput" placeholder="upload your jokes,shayari and qoutes..."></textarea><br>
                <input type="hidden" name="MAX_UPLOAD_SIZE" value="<%= @web.max_upload_size %>">
                    <input type="file" name="file" name="jimage" id="jimage" class="inputfile" />
                    <label for="jimage"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                    <div id="filename">Choose a image
                    </div>
                    </label>
                    <div class="preview-box"><img class="img-size" id="uploadedimage"/><div class="p-text">image preview</div></div>
                    <center>
                        <button type="submit" name="submit" class="log-btn">Upload</button>
                    </center><br>
                </form>
            </div>
        </div>
    </div>
</div>
    