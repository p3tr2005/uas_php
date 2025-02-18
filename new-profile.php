<main class="new-profile-container rounded-md">
    <h1>Create new profile</h1>
    <form action="create-profile.php" method="POST">
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
            <label for="role" class="form-label">Role</label>
            <input name="role" placeholder="e.g software engineer" type="text" class="form-control" id="role">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" name="gender" id="gender">
                <option value="He/Him">Male</option>
                <option value="She/Her">Female</option>
            </select>
        </div>
        <button type="submit" class="btn btn-dark rounded-full fs-6 container-fluid p-3">Submit</button>
    </form>
</main>