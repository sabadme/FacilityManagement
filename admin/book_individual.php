<div class="booking-container">
    <div class="top-container">
        <strong>Book Individual</strong>
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

    <div class="individual-container">
        <div class="Lcc">
            <center><img src="../images/lccb.png" width="50px;"></center>
            <span>LA CONSOLACION COLLEGE</span><br>
            <label>Galo corner Gatuslao Street, Bacolod City, 6100</label><br>
            <label>Neg. Occ., Philippines Tel Nos. +63(43)4349661 to 64</label>
        </div> 
        <div class="bookspace">
            <span>Carlo Bariso</span>
            <label>508    -    1st Semester <br> Date Start - Date End</label>            
        </div>

        <div class="individual-eq">
            <div class="bookspace">
                <span>Projector</span>
                <label>Time Start - Time End</label>
            </div>
            <div class="bookspace">
                <span>Projector</span>
                <label>Time Start - Time End</label>
            </div>
        </div>
        <span class="sign">Signature</span>
    </div>

</div>

<style>
    .individual-container {
        font-family: sans-serif;

        padding: 20px;
        border: 1px solid black;
        width: 45%;
    }

    .individual-eq {
        margin: 70px 0;
        padding: 20px;
        border-top: 1px solid black;
    }

    .bookspace {
        display: flex;
        justify-content: space-between;
    }

    .bookspace span {
        font-size: 20px;
    }

    .sign {
        border-top: 1px solid black;
        padding: 5px;
    }

    .Lcc span {
        font-size: 16px;
    }

    .Lcc label {
        font-size: 14px;
    }

    .Lcc img {
        margin-bottom: 10px;
    }

    .Lcc {
        text-align: center;
        margin-bottom: 50px;
    }


</style>