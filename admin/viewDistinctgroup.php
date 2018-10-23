<?php  $viewGroupEquipment = $_REQUEST['viewGroupEquipment'];  ?>
<div class="equipments-container">
    <div class="top-container">
        <strong><?php echo $viewGroupEquipment; ?></strong>
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

    <div class="form-container">
        <div class="set-container">
            <input type="text" class="search" id="myInput1"  placeholder="Search names..">

            <div class="table-container" id="wrapper">
                <table>
                    <thead>
                        <th></th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Registered</th>
                        <th>Expiration</th>
                    </thead>

                <tbody>
                    <?php include"admin/groupEquipment.php"; ?>
                    </tbody>
                </table>
            </div>

            <form action="" method="POST"  enctype="multipart/form-data">
                <button class="action" type="submit" name="addNewGroup" value="<?php echo $viewGroupEquipment; ?>">Add New</button>
            </form>
        </div>
    </div>
</div>

