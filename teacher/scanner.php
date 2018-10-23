
<div class="scanner-container">
    <div class="top-container">
        <strong>QR Scanner</strong>
        <div class="notifs-container">
            <strong class="notifs" value="<?php echo $accountname; ?>" id="valueNotif"></strong>
            <span id="teacherBookingApproved" class="counter"></span>

            <div class="notifs-wrapper">
                <strong>Notifications</strong>
                    <?php include"admin/viewreport_table.php"; ?>                
            </div>

        </div>
        <a href="logout.php" class="logout"></a>
    </div>

	<div class="scan-wrapper">
		<form action="" method="POST">
			<button class="CameraBtn" name="openCam" type="submit">Open Camera</button>

			<img src="images/camera-img.png" />

			<input type="text" id="scannerValue" name="equipmentData" value="<?php echo $content; ?>" placeholder="Scan or enter QR code to locate">
			<button class="locate" name="equipmentLocation">LOCATE</button>
		</form>
	</div>
</div>

<script>
    let scanner = new Instascan.Scanner({

    });
    
    scanner.addListener('scan', function (content) {
        document.getElementById("scannerValue").value = content;
    });
	  
</script>
     

