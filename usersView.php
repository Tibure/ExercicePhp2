<?php
   echo '<table>
   <tr><th>Firstname</th><th>Lastname</tr>';
foreach($users as $user){
 
        echo'<tr><td>'.$user->get_first_name().'</td><td>'
         .$user->get_last_name().
        '</td></tr>';
    }

?>