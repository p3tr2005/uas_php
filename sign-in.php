<main class="auth-container rounded-md shadow-sm">
    <h1 class="fw-bold">Sign in</h1>

    <form action="login.php" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" placeholder="e.g johndoe@example.com" type="email" class="form-control" id="email" aria-describedby="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" placeholder="********" type="password" class="form-control" id="role">
        </div>
        <button type="submit" class="btn btn-dark rounded-full fs-6 container-fluid p-3">Sign in</button>

        <div class="mt-4 d-flex gap-2 align-center text-center text-sm">
            <p>Don't have an account?</p>

            <a href="?page=create-account" class="fw-semibold underline">Create account</a>
        </div>
    </form>
</main>