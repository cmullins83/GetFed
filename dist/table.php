<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin Page</title>

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#5bc0de">
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/Font-Awesome/css/font-awesome.min.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/lib/datatables/css/demo_page.css">
    <link rel="stylesheet" href="assets/lib/datatables/css/DT_bootstrap.css">
    <script src="assets/lib/modernizr-build.min.js"></script>
  </head>
  <body>
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner">

            <!--Begin Datatables-->
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                    <div class="icons">
                      <i class="fa fa-table"></i>
                    </div>
                    <h5>Driver Info</h5>
                  </header>
                  <div id="collapse4" class="body">
                    <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                      <thead>
                        <tr>
							<th>#</th>
							<th>Driver</th>
							<th>Status</th>
							<th>Phone</th>
							<th>Deliveries Today</th>
						  </tr>
                      </thead>
					  <tbody>
<?php
require_once('../../Food.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM drivers ORDER BY Number ASC";
 $result = mysqli_query($conn, $sql); 
 echo "<tr>"; 
 while($row = mysqli_fetch_assoc($result)) {
	echo "<td>" . $row["Number"] . "</td>";
	echo "<td>" . $row["Driver"] . "</td>";
	echo "<td>" . $row["Status"] . "</td>";
	echo '<td><a href=tel:' . $row["Phone"] . '>' . $row["Phone"] . '</a></td>';
	echo "<td>" . $row["Deliveries"] . "</td></tr>";
}
mysqli_close($conn);
?>
                   </tbody>
                   </table>
                  </div>
                </div>
              </div>
            </div><!-- /.row -->

            <!--End Datatables-->
            <div class="row">

              <!-- .col-lg-6 -->
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>Restaraunts</h5>
                    <div class="toolbar">
                      <div class="btn-group">
                        <a href="#defaultTable" data-toggle="collapse" class="btn btn-sm btn-default minimize-box">
                          <i class="fa fa-angle-up"></i>
                        </a> 
                        <a class="btn btn-danger btn-sm close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </div>
                    </div>
                  </header>
                  <div id="defaultTable" class="body collapse in">
                    <table class="table responsive-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Location</th>
						  <th>Phone</th>
                          <th>Deliveries</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
require_once('../../Food.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM restaraunts ORDER BY Number ASC";
$result = mysqli_query($conn, $sql); 
echo "<tr>"; 
while($row = mysqli_fetch_assoc($result)) {
	echo "<td>" . $row["Number"] . "</td>";
	echo "<td>" . $row["Name"] . "</td>";
	echo '<td><a href="https://www.google.com/maps/place/' . $row["Location"] . '" target="_blank">' . $row["Location"] . '</a></td>';
	echo '<td><a href=tel:' . $row["Phone"] . '>' . $row["Phone"] . '</a></td>';
	echo "<td>" . $row["Deliveries"] . "</td></tr>";
}
mysqli_close($conn);
?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><!-- /.col-lg-6 -->

              <!-- .col-lg-6 -->
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>Top Five Customers</h5>
                    <div class="toolbar">
                      <div class="btn-group">
                        <a href="#stripedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                          <i class="fa fa-angle-up"></i>
                        </a> 
                        <a class="btn btn-danger btn-sm close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </div>
                    </div>
                  </header>
                  <div id="stripedTable" class="body collapse in">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Phone</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
require_once('../../Food.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM customers ORDER BY Deliveries DESC LIMIT 5";
$result = mysqli_query($conn, $sql); 
echo "<tr>"; 
$topcustcount = 1 ;
while($row = mysqli_fetch_assoc($result)) {
	echo "<td>" . $topcustcount . "</td>";
	echo "<td>" . $row["Name"] . "</td>";
	echo "<td>" . $row["Address"] . "</td>";
	echo '<td><a href=tel:' . $row["Phone"] . '>' . $row["Phone"] . '</a></td></tr>';
	$topcustcount = $topcustcount + 1 ;
}
mysqli_close($conn);
?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><!-- /.col-lg-6 -->
            </div>
            <div class="row">

              <!-- .col-lg-6 -->
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>Top Orders This Week</h5>
                    <div class="toolbar">
                      <div class="btn-group">
                        <a href="#borderedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                          <i class="fa fa-angle-up"></i>
                        </a> 
                        <a class="btn btn-danger btn-sm close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </div>
                    </div>
                  </header>
                  <div id="borderedTable" class="body collapse in">
                    <table class="table table-bordered responsive-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Item</th>
						  <th>Restaraunt</th>
                          <th>QTY</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
require_once('../../Food.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM menu ORDER BY Ordered DESC LIMIT 5";
$result = mysqli_query($conn, $sql); 
echo "<tr>"; 
$topitemcount = 1 ;
while($row = mysqli_fetch_assoc($result)) {
	echo "<td>" . $topitemcount . "</td>";
	echo "<td>" . $row["Food"] . "</td>";
	$Rest = $row["RNumber"];
	$restsql = "SELECT * from restaraunts where Number = '$Rest'";
	$RestResult = mysqli_query($conn, $restsql);
	while($restrow = mysqli_fetch_assoc($RestResult)) {
	echo "<td>" . $restrow["Name"] . "</td>";
	}
	echo '<td>' . $row["Ordered"] . '</td></tr>';
	$topitemcount = $topitemcount + 1 ;
}
mysqli_close($conn);
?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><!-- /.col-lg-6 -->

              <!-- .col-lg-6 -->
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>Table Condensed</h5>
                    <div class="toolbar">
                      <div class="btn-group">
                        <a href="#condensedTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                          <i class="fa fa-angle-up"></i>
                        </a> 
                        <a class="btn btn-danger btn-sm close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </div>
                    </div>
                  </header>
                  <div id="condensedTable" class="body collapse in">
                    <table class="table table-condensed responsive-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Score</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Jill</td>
                          <td>Smith</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Eve</td>
                          <td>Jackson</td>
                          <td>94</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>John</td>
                          <td>Doe</td>
                          <td>80</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Adam</td>
                          <td>Johnson</td>
                          <td>67</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><!-- /.col-lg-6 -->
            </div>
            <div class="row">

              <!-- .col-lg-6 -->
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>Optional row classes</h5>
                    <div class="toolbar">
                      <div class="btn-group">
                        <a href="#optionalTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                          <i class="fa fa-angle-up"></i>
                        </a> 
                        <a class="btn btn-danger btn-sm close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </div>
                    </div>
                  </header>
                  <div id="optionalTable" class="body collapse in">
                    <table class="table responsive-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Score</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Jill</td>
                          <td>Smith</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Eve</td>
                          <td>Jackson</td>
                          <td>94</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>John</td>
                          <td>Doe</td>
                          <td>80</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Adam</td>
                          <td>Johnson</td>
                          <td>67</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><!-- /.col-lg-6 -->

              <!-- .col-lg-6 -->
              <div class="col-lg-6">
                <div class="box">
                  <header>
                    <h5>Sortable Table</h5>
                    <div class="toolbar">
                      <div class="btn-group">
                        <a href="#sortableTable" data-toggle="collapse" class="btn btn-default btn-sm minimize-box">
                          <i class="fa fa-angle-up"></i>
                        </a> 
                        <a class="btn btn-danger btn-sm close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </div>
                    </div>
                  </header>
                  <div id="sortableTable" class="body collapse in">
                    <table class="table table-bordered sortableTable responsive-table">
                      <thead>
                        <tr>
                          <th>#
                            <i class="icon-sort"></i>
                            <i class="icon-sort-down"></i>
                            <i class="icon-sort-up"></i>
                          </th>
                          <th>First Name
                            <i class="icon-sort"></i>
                            <i class="icon-sort-down"></i>
                            <i class="icon-sort-up"></i>
                          </th>
                          <th>Last Name
                            <i class="icon-sort"></i>
                            <i class="icon-sort-down"></i>
                            <i class="icon-sort-up"></i>
                          </th>
                          <th>Score
                            <i class="icon-sort"></i>
                            <i class="icon-sort-down"></i>
                            <i class="icon-sort-up"></i>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Jill</td>
                          <td>Smith</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Eve</td>
                          <td>Jackson</td>
                          <td>94</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>John</td>
                          <td>Doe</td>
                          <td>80</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Adam</td>
                          <td>Johnson</td>
                          <td>67</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><!-- /.col-lg-6 -->
            </div>
          </div>

          <!-- end .inner -->
        </div>

        <!-- end .outer -->
      </div>

      <!-- end #content -->
    </div><!-- /#wrap -->
    <div id="footer">
      <p>2013 &copy; Metis Admin</p>
    </div>

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->
    <script src="assets/lib/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="assets/lib/datatables/DT_bootstrap.js"></script>
    <script src="assets/lib/tablesorter/js/jquery.tablesorter.min.js"></script>
    <script src="assets/lib/touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script>
      $(function() {
        metisTable();
        metisSortable();
      });
    </script>
    <script src="assets/lib/screenfull/screenfull.js"></script>
    <script src="assets/js/main.min.js"></script>
  </body>
</html>