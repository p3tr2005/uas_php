<main class="container rounded-md shadow-sm">
    <header class="home-header d-flex justify-content-between rounded-full">
        <h1 class="fw-bold">MANAGE PROFILES</h1>

        <section class="d-flex justify-content-between align-items-center gap-3">
            <div class="btn btn-dark my-btn fw-semibold">
                <a href="?page=users" class="text-white">Users</a>
            </div>

            <div class="btn btn-dark my-btn fw-semibold">
                <a href="?page=new-profile" class="text-white">Create profile</a>
            </div>

            <button onclick="onPressedLogout()" class="btn btn-light my-btn fw-semibold bg-stone-200">
                Sign out
            </button>
        </section>
    </header>

    <?php if (!empty($profiles)) : ?>
        <section class="profiles">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Date</th>
                        <?php if ($isLoggedIn && $isAdmin) : ?>
                            <th scope="col">Action</th>
                        <?php endif ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($profiles as $profile) : ?>
                        <tr>
                            <td>
                                <div class="picture"><?= htmlspecialchars($profile["name"][0]) ?></div>
                            </td>
                            <td><?= htmlspecialchars($profile["name"]) ?></td>
                            <td><?= htmlspecialchars($profile["email"]) ?></td>
                            <td><?= htmlspecialchars($profile["gender"]) ?></td>
                            <td><?= htmlspecialchars($profile["createdAt"]) ?></td>

                            <?php if ($isLoggedIn && $isAdmin) : ?>
                                <td>
                                    <a href="?page=detail&id=<?= $profile['id'] ?>" class="btn btn-warning"> <svg width="20" height="20" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M2,21H8a1,1,0,0,0,0-2H3.071A7.011,7.011,0,0,1,10,13a5.044,5.044,0,1,0-3.377-1.337A9.01,9.01,0,0,0,1,20,1,1,0,0,0,2,21ZM10,5A3,3,0,1,1,7,8,3,3,0,0,1,10,5ZM20.207,9.293a1,1,0,0,0-1.414,0l-6.25,6.25a1.011,1.011,0,0,0-.241.391l-1.25,3.75A1,1,0,0,0,12,21a1.014,1.014,0,0,0,.316-.051l3.75-1.25a1,1,0,0,0,.391-.242l6.25-6.25a1,1,0,0,0,0-1.414Zm-5,8.583-1.629.543.543-1.629L19.5,11.414,20.586,12.5Z"></path>
                                            </g>
                                        </svg></a>
                                    <button data-id="<?= $profile['id'] ?>" onclick="onPressedAskDeleteConfirmation(this)" class="btn btn-danger"> <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M6 5H18M9 5V5C10.5769 3.16026 13.4231 3.16026 15 5V5M9 20H15C16.1046 20 17 19.1046 17 18V9C17 8.44772 16.5523 8 16 8H8C7.44772 8 7 8.44772 7 9V18C7 19.1046 7.89543 20 9 20Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg></button>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    <?php endif ?>

    <?php if (empty($profiles)) : ?>
        <section class="empty">
            <svg fill="#000000" width="100" height="100" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 59.227 59.227" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <g>
                            <path d="M51.586,10.029c-0.333-0.475-0.897-0.689-1.449-0.607c-0.021-0.005-0.042-0.014-0.063-0.017L27.469,6.087 c-0.247-0.037-0.499-0.01-0.734,0.076L8.63,12.799c-0.008,0.003-0.015,0.008-0.023,0.011c-0.019,0.008-0.037,0.02-0.057,0.027 c-0.099,0.044-0.191,0.096-0.276,0.157c-0.026,0.019-0.051,0.038-0.077,0.059c-0.093,0.076-0.178,0.159-0.249,0.254 c-0.004,0.006-0.01,0.009-0.014,0.015L0.289,23.78c-0.293,0.401-0.369,0.923-0.202,1.391c0.167,0.469,0.556,0.823,1.038,0.947 l6.634,1.713v16.401c0,0.659,0.431,1.242,1.062,1.435l24.29,7.422c0.008,0.004,0.017,0.001,0.025,0.005 c0.13,0.036,0.266,0.059,0.402,0.06c0.003,0,0.007,0.002,0.011,0.002l0,0h0.001c0.143,0,0.283-0.026,0.423-0.067 c0.044-0.014,0.085-0.033,0.13-0.052c0.059-0.022,0.117-0.038,0.175-0.068l17.43-9.673c0.477-0.265,0.772-0.767,0.772-1.312 V25.586l5.896-2.83c0.397-0.19,0.69-0.547,0.802-0.973c0.111-0.427,0.03-0.88-0.223-1.241L51.586,10.029z M27.41,9.111 l17.644,2.59L33.35,17.143l-18.534-3.415L27.41,9.111z M9.801,15.854l21.237,3.914l-6.242,9.364l-20.78-5.365L9.801,15.854z M10.759,43.122V28.605l14.318,3.697c0.125,0.031,0.25,0.048,0.375,0.048c0.493,0,0.965-0.244,1.248-0.668l5.349-8.023v25.968 L10.759,43.122z M49.479,41.1l-14.431,8.007V25.414l2.635,5.599c0.171,0.361,0.479,0.641,0.854,0.773 c0.163,0.06,0.333,0.087,0.502,0.087c0.223,0,0.444-0.05,0.649-0.146l9.789-4.698L49.479,41.1L49.479,41.1z M39.755,28.368 l-4.207-8.938L49.85,12.78l5.634,8.037L39.755,28.368z"></path>
                        </g>
                    </g>
                </g>
            </svg>

            <p class="fs-5 text-stone-500">There is not profile yet!</p>
        </section>
    <?php endif ?>
</main>


<script>
    function onPressedAskDeleteConfirmation(button) {
        const id = button.getAttribute("data-id");

        if (confirm('Are you sure you want to delete this profile?')) {
            window.location.href = `?page=delete-profile&id=${id}`;
        } else {
            window.location.href = '/';
        }
    }

    function onPressedLogout() {
        if (confirm('Are you sure you want sign out?')) {
            window.location.href = '?page=logout';
        } else {
            window.location.href = '/';
        }
    }
</script>