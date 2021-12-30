<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    ques {
        min-height: 433px;
    }
    </style>
    <title>iDiscuss - Coding forum</title>
</head>

<body>
    <?php include 'partials/_db.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_user = $row['thread_user-id'];

        // query the users table to find out the name of op
        $sql2 = "SELECT user_email FROM `userstable` WHERE sno='$thread_user-id'";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $posted_by = $row2['user_email'];
    }
    
    ?>

    <?php
    $showALert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method=='POST') {
        // insert into db(comment table)
        $comment = $_POST['comment'];
        $comment = str_replace("<", "&lt;",  $comment);
        $comment = str_replace(">", "&gt;", $comment);
        $sno = $_POST['sno'];
        // $th_desc = $_POST['desc'];
        $sql = "INSERT INTO `comments` (`comment_content` , `thread_id` , `comment_by`, `comment_time`) VALUES ('$comment' , '$id' , '$sno' , current_timestamp())";
        $result = mysqli_query($conn,$sql);
        $showALert = true;
        if($showALert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your comment has been added!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        
    }
    
    
    ?>

    <!-- category container starts here -->
    <div class="container my-4">
        <div class="jumbotron-fluid">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead"><?php echo $desc; ?>
            </p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing knowledge with others.<br>
                No Spam / Advertising in the forums.
                Do not post copyright-infringing material.
                Do not post “offensive” posts, links or images.
                Do not cross post questions.
                Do not PM users asking for help.
                Remain respectful of other members at all times.

            </p>
            <p>Posted By: <em><?php echo $posted_by; ?></em></p>
        </div>
    </div>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
    echo '<div class="container">
        <h1 class="py-2">Post a Comment</h1>
        <form action="' . $_SERVER["REQUEST_URI"] . '" method="post">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                <input type="hidden" name="sno" value="'. $_SESSION["sno"] .'">

            </div>
            <button type="submit" class="btn btn-success">Post comments</button>
        </form>

    </div>';
    }
    else{
        echo '<div class="container">
        <h1 class="py-2">Post a Comment<h1>
        <p class="lead">You are not logged in. Please login to be able to post the comment</p>
      </div>';
    }
    ?>
    <div class="container mb-5" id="ques">
        <h1 class="py-2">Discussions</h1>
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE thread_id=$id";
        $result = mysqli_query($conn,$sql);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result)){
            $noResult = false;
            $id = $row['comment_id'];
            $content = $row['comment_content'];
            $comment_time = $row['comment_time'];
            $thread_user = $row['comment_by'];
            $sql2 = "SELECT user_email FROM `userstable` WHERE sno='$thread_user-id'";
            $result2 = mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($result2);

        echo '<div class="media my-3">
            <img src="img/user1.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
            <p class="fw-bold my-0">'. $row2['user_email'] .' at ' .$comment_time. '</p>
                 ' . $content . '
            </div>
        </div>';
    }
    if($noResult){
        echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="display-4">No comments found</p>
                    <p class="lead">Be the first person to comment.</p>
                </div>
            </div>';
    }
    ?>
    </div>
    <?php include 'partials/_footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>