<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginmodallabel">Login To Discussion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/forum/partials/handlelogin.php" method="post">
            <div class="modal-body">
                
                    <div class="mb-3">
                        <label for="loginemail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginemail" name = "loginemail"aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="loginpassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginpassword" name= "loginpassword">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>

            </div>
            </form>
        </div>
    </div>
</div>