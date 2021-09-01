<link rel="sylesheet" href="style.css">


<?php 
include 'connDB.php';

/*if ($search_txt != "") { */
    $ret2=$link->query("Select * From `tbl_subjects` LIMIT 50");
/*}else{
    $ret2=$link->query("Select * From `tbl_student` Where CONCAT(`ID`,`Name`,`Course`)  Like '%$search_txt%' LIMIT 0");
}*/						
    while ($fetch_d = $ret2 -> fetch_array()){
?>			
        
        <a href="WhenSubjectClicked.php">
              <div class="card">
                  <div class="card-image"></div>
                  <div class="card-text">
                    <span class="date">4 days ago</span>
                    <h2><?php echo $fetch_d['sub_title'];?></h2>
                    <p><?php echo $fetch_d['sub_desc'];?></p>
                  </div>
                  <div class="card-stats">
                    <div class="stat">
                      <div class="value">44</div>
                      <div class="type">Students</div>
                    </div>
                    <div class="stat border">
                      <div class="value">5123</div>
                      <div class="type">Boys</div>
                    </div>
                    <div class="stat">
                      <div class="value">32</div>
                      <div class="type">Girls</div>
                    </div>
                  </div>
                </div>
              </a>

<?php		
    }//end of while
?>
