
<div class="accounts-container">
<div class="top-container">
    <strong>REPORTS</strong>

    <div class="notifs-container">
        <strong id="adminNotifHide" class="notifs"></strong>
        <span id="count" class="counter"></span>

        <div class="notifs-wrapper">
                <strong>Notifications</strong>
                    <?php include"admin/viewreport_table.php"; ?>                
        </div>

    </div>
    <a href="logout.php" class="logout"></a>
</div>
		<div class="table-container" id="wrapper">
			<div class="btndivstyle">
			<input type="text" class="search" id="myInput" onkeyup="myFunction()" placeholder="Search names..">
			</div>
				<table id="myTable">
					
				<thead>
					<th>Name</th>
					<th>View</th>
					
				</thead>	

				<tbody>
					<?php include"Technician/viewreport_table.php"; ?>
				</tbody>
			</table>
		</div>
</div>


