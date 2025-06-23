<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'orphan_management'); // Use 'root' and empty password

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions for adding, updating, or deleting orphan data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        // Add orphan
        $name = $_POST['name'];
        $age = $_POST['age'];
        $education = $_POST['education'];
        $health_condition = $_POST['health_condition'];

        // Handle file upload
        $photo = $_FILES['photo']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo);
        move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);

        $sql = "INSERT INTO orphans (name, age, education, health_condition, photo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisss", $name, $age, $education, $health_condition, $target_file);
        $stmt->execute();
        $stmt->close();
    } elseif (isset($_POST['update'])) {
        // Update orphan
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $education = $_POST['education'];
        $health_condition = $_POST['health_condition'];

        // Handle file upload if a new file is uploaded
        if ($_FILES['photo']['name']) {
            $photo = $_FILES['photo']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($photo);
            move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);
            $sql = "UPDATE orphans SET name = ?, age = ?, education = ?, health_condition = ?, photo = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sisssi", $name, $age, $education, $health_condition, $target_file, $id);
        } else {
            $sql = "UPDATE orphans SET name = ?, age = ?, education = ?, health_condition = ? WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sissi", $name, $age, $education, $health_condition, $id);
        }
        $stmt->execute();
        $stmt->close();
    } elseif (isset($_POST['delete'])) {
        // Delete orphan
        $id = $_POST['id'];
        $sql = "DELETE FROM orphans WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch orphan data
$sql = "SELECT * FROM orphans";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <a href="admin_logout.php">Logout</a>
    </header>
    <section>
        <h2>Manage Orphans</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="education" placeholder="Education" required>
            <input type="text" name="health_condition" placeholder="Health Condition" required>
            <input type="file" name="photo" required>
            <button type="submit" name="add">Add Orphan</button>
        </form>

        <h3>Existing Orphans</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Education</th>
                <th>Health Condition</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['education']; ?></td>
                <td><?php echo $row['health_condition']; ?></td>
                <td><img src="<?php echo $row['photo']; ?>" alt="Orphan Photo" width="50"></td>
                <td>
                    <form method="POST" action="" style="display:inline;" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
                        <input type="number" name="age" value="<?php echo $row['age']; ?>" required>
                        <input type="text" name="education" value="<?php echo $row['education']; ?>" required>
                        <input type="text" name="health_condition" value="<?php echo $row['health_condition']; ?>" required>
                        <input type="file" name="photo">
                        <button type="submit" name="update">Update</button>
                    </form>
                    <form method="POST" action="" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </section>
</body>
</html>

<?php
$conn->close();
?>