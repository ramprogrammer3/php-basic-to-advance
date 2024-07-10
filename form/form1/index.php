<?php include 'header.php' ?>

        <h3 class="text-center my-3">php form tutorial</h3>
        <form action="form.php" method="post">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password : </label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="checkbox" id="checkbox" class="form-check-input">
                <label for="checkbox" class="form-check-label"> check me out </label>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>