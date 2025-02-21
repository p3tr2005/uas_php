<main class="auth-container rounded-md shadow-sm">
    <h1 class="fw-bold">Create Account</h1>

    <form action="register.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Full name</label>
            <input name="name" placeholder="e.g john doe" type="text" class="form-control" id="name" aria-describedby="name">
            <div id="name" class="form-text">We'll never share your name with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" placeholder="e.g johndoe@example.com" type="email" class="form-control" id="email" aria-describedby="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" placeholder="********" type="password" class="form-control" id="role">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">role</label>
            <select class="form-select" name="role" id="role">
                <option value="admin">ADMIN</option>
                <option value="user">USER</option>
            </select>
        </div>
        <button type="submit" class="btn btn-dark rounded-full fs-6 container-fluid p-3">Create account</button>

        <div class="mt-4 d-flex gap-2 align-center text-center text-sm">
            <p>Already have an account?</p>

            <a href="?page=sign-in" class="fw-semibold underline">Sign in</a>
        </div>
    </form>
</main>