<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login to iDiscuss</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/forum/partials/handleLogin.php" method="post">
            <div class="modal-body">
                
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Username</label>
                        <input class="form-control" type="text" name="loginEmail" id="loginEmail" aria-describedby="emailHelp">
                        <!-- <input class="form-control" type="email" name="loginEmail" id="loginEmail" aria-describedby="emailHelp"> -->
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="loginPass" class="form-label">Password</label>
                        <input class="form-control" type="password" name="loginPass" id="loginPass">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </form>

        </div>
    </div>
</div>