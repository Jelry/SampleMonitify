
<?php 
include 'connDB.php';

/*if ($search_txt != "") { */
    $ret2=$link->query("Select * From `tbl_subjects` LIMIT 5");
/*}else{
    $ret2=$link->query("Select * From `tbl_student` Where CONCAT(`ID`,`Name`,`Course`)  Like '%$search_txt%' LIMIT 0");
}*/						
    while ($fetch_d = $ret2 -> fetch_array()){
?>			
        <tr>
            <td><?php echo $fetch_d['sub_title'];?> </td>
            <td><?php echo $fetch_d['sub_desc'];?> </td>
           
            <td><a href="edit_me.php?id=<?php echo $fetch_d['ID']; ?>"><button type="button" title="click to edit ...">Edit</button></a></td>
            
            <td><a href="del_me.php?cd=<?php echo $fetch_d['ID']; ?>"><button type="button" title="click to delete ...">Delete</button></a></td>
        </tr>
<?php		
    }//end of while
?>

