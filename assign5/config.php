<?php
        $username="n00869815";
        $password="copn00869815";
        $hostname="localhost";
        $database="n00869815";
        $conn= new mysqli($hostname,$username,$password);
        $conn->select_db($database) or die ("Unable to select database");
        $query = "select * from Employee order by LastName";
        $result = mysqli_query($conn, $query);
        ?>
        <table>
        <tr><th>Last Name</th><th>First Name</th><th>Department</th><th>Phone</th><th>Email</th><th>Gender</tr><th>Manager</th></tr>
        <?php
        while($row = mysqli_fetch_row($result))
        {
                $lName=$row[1];
                $fName=$row[0];
                $department=$row[2]
                $phone=$row[3];
                $email=$row[4];
                $gender=$row[5];
                $manager=$row[6];
                ?><tr><td><?php
                echo $lName; ?></td><td><?php
                echo $fName; ?></td><td><?php
                echo $department; ?></td><td><?php
                echo $phone; ?></td><td><?php
                echo $email; ?></td><td><?php
                echo $gender; ?></td><td><?php
                echo $manager; ?></td><tr><?php
        }

        mysqli_close($conn); ?>
        </table>

