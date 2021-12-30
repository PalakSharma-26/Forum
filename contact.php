<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>iDiscuss - Coding forum</title>
    <style>
    .container {
        min-height: 80vh;
    }
    </style>
</head>

<body>
    <?php include 'partials/_db.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <div class="container my-3">
        <h1 class="text-center">Contact-us</h1>
        <form class="row g-3">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername"
                        aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">City</label>
                <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">State</label>
                <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationDefault05" required>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
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