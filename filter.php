<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
      </tr>
      <?php
      foreach (filter_list() as $key => $value) {

        # code...
        echo '<tr> <td>'.$value.'</td><td>'.$key.'</td></tr>';
      } ?>
    </table>
  </body>
</html>
