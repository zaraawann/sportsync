<!-- resources/views/user-profile.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head content as before... -->
    <style>
        /* Custom styles for the Zara-like design */
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .profile-section {
            text-align: right;
            position: relative;
        }

        .profile-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
        }

        .profile-options {
            position: absolute;
            top: 60px;
            right: 0;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .profile-options a {
            display: block;
            padding: 10px;
            color: #495057;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .profile-options a:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <!-- Navbar as before... -->
    </nav>

    <div class="container mt-4">
        <div class="profile-section">
            <div class="profile-icon" id="profileIcon">
                <?php echo e(Auth::user()->name[0]); ?>

            </div>
            <div class="profile-options" id="profileOptions">
                <a href="<?php echo e(route('user-profile')); ?>">Edit Profile</a>
                <form action="<?php echo e(route('logout')); ?>" method="POST" role="search">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-link" type="submit">Logout</button>
                </form>
            </div>
        </div>

        <h1>Welcome, <?php echo e(Auth::user()->name); ?></h1>

        <!-- Additional Information Form -->
        <form action="<?php echo e(route('update-profile')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="favorite_sports" class="form-label">Favorite Sports</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="favorite_sports[]" id="football"
                        value="football">
                    <label class="form-check-label" for="football">⚽ Football</label>
                </div>
                <!-- Add more checkboxes for other sports -->
            </div>
            <div class="mb-3">
                <label for="home_location" class="form-label">Home Location</label>
                <input type="text" name="home_location" class="form-control" id="home_location"
                    placeholder="Enter your home location" required>
            </div>
            <div class="mb-3">
                <label for="location_type" class="form-label">Location Type</label>
                <select name="location_type" class="form-select" id="location_type" required>
                    <option value="school">School</option>
                    <option value="college">College</option>
                    <option value="university">University</option>
                    <option value="office">Office</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" id="location"
                    placeholder="Enter your location" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
        </form>
    </div>

    <script>
        // JavaScript to handle profile icon toggle
        const profileIcon = document.getElementById('profileIcon');
        const profileOptions = document.getElementById('profileOptions');

        profileIcon.addEventListener('click', () => {
            profileOptions.style.display = profileOptions.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (event) => {
            if (!profileIcon.contains(event.target) && !profileOptions.contains(event.target)) {
                profileOptions.style.display = 'none';
            }
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\awana\sport_sync\resources\views/user-profile.blade.php ENDPATH**/ ?>