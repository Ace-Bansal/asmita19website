<?php
  include("header.php");
?>

    <div class="ui container">

    <?php
      include_once("config.php");

      $sql = "SELECT * FROM pdotrial1";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $users = $stmt->fetchAll();
      ?>
      <table class="ui celled table">
        <thead>
          <tr>
            <th>Institute</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Academic Year</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Events</th>
            <!-- <th>Action</th> -->
          </tr>
        </thead>
      <tbody>

<?php
      foreach ($users as $user) {
        echo "<tr>";
        echo "<td>$user->institute</td>";
        echo "<td>$user->name</td>";
        echo "<td>$user->designation</td>";
        echo "<td>$user->acad_year</td>";
        echo "<td>$user->email</td>";
        echo "<td>$user->phone</td>";        
        echo "<td>$user->events</td>";
        // echo "<td><a href = 'update.php?id={$user->id}'><button class='ui small button'>Update</button></a><a href = 'delete.php?id={$user->id}'><button class='ui small red button'>Delete</button></a></td>";
        echo "</tr>";
      }

?>
  </tbody>
  <tfoot>
    <tr><th colspan="3">
    </th>
  </tr></tfoot>
</table>

<!-- <a href = 'add.php'><button class="ui button basic green">Add</button></a> -->
<a href = 'register.html'><button class="ui button basic green">Register</button></a>

</div>


<!-- <table class="ui celled table">
  <thead>
    <tr><th>Name</th>
    <th>E-mail</th>
    <th>Action</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>name1</td>
      <td>email1</td>
      <td>action1</td>
    </tr>
  </tbody>
  <tfoot>
    <tr><th colspan="3">
    </th>
  </tr></tfoot>
</table> -->
<?php
  include("footer.php");
?>
