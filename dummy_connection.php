<h2>List Data Ocean One Users</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
<?php
        include'connection.php';
        $user_data = mysqli_query($conn, "select * from oceanone_");
        $no = 1;
        foreach($user_data as $value){
            echo"
            <tr>
                <td>$no</td>
                <td>".$value['id_user_data']."</td>
                <td>".$value['name_user']."</td>
                <td>".$value['email_user']."</td>
                <td>".$value['message_user']."</td>
            </tr>
            ";
            $no++;
        }
    ?>