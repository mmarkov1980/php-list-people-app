<?php include './lib/functions.php';?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'] ? : 'Unknown';
  $age = $_POST['age'] ? : 'Unknown';
  $sex = $_POST['sex'] ? : 'Unknown';
  $target_dir = "uploads/";
  $target_file = $target_dir . $_FILES["icon"]["name"];
  move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file);

  $new_person = [
    'name' => $name,
    'age' => $age,
    'sex' => $sex,
    'icon' => $target_file
  ];

  $people = get_people();

  $people[] = $new_person;

  save_people($people);

  header("Location: /php");

}

?>

<?php include './layout/header.php'; ?>

<h2>Add person</h2>

<form action="add-person.php" method="post" enctype="multipart/form-data">
  <div>
    <label for="name">Name</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age</label>
    <input type="number" name="age">
  </div>
  <div>
    <label for="sex">Sex</label>
    <input type="text" name="sex">
  </div>
  <div>
    <label for="icon">Icon</label>
    <input type="file" name="icon">
  </div>
  <button type="submit">Add Person</button>
</form>

<?php include './layout/footer.php';?>
