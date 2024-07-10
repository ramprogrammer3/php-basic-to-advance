<?php include 'header.php' ?>

<div class="container">
    <h3 class="text-center my-3">php form tutorial here </h3>

    <div class="row">
        <div class="col-md-6">
            <form action="form.php" method="get">
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Your name </label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Enter your email : </label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password : </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>

</html>