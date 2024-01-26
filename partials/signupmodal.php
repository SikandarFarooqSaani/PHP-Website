<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodallabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupmodallabel">Signup To Discussion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/forum/partials/handlesignup.php" method="post">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signupemail" name="signupemail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>




                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="signupusername" name="signupusername" aria-describedby="text">
                    </div>







                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="signuppassword">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cpasssword" name="signupcpassword">
                    </div>
                    <div class="mb-3">
                        <label for="Phone Number" class="form-label">Enter Phone Number to get Notified (Not Necessary) </label>
                        <input type="numbers" class="form-control" id="signupphoneNumber" name="signupphonenumber">
                    </div>
                    <div class="container my-2">
                        <label for="gender"> Select you gender</label>
                        <select name="gender" id = "Gender">
                            <option value="none" selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">SignUp</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>

                </div>
            </form>
        </div>
    </div>
</div>