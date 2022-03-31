<h1 class="page-header">
        All Users
    </h1>
<table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">isActive</th>
                                <!-- <th class="text-center">Password</th> -->
                                
                                <!-- <th> Date Created</th> -->
                                <th colspan="4" class="text-center">Operations</th>
                            </tr>
                        </thead>

                        <tbody>
        <?php 
            $query = "SELECT * FROM admin";
            $select_users = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($select_users)) {
                $user_id = $row['id'];
                $username = $row['name'];
                $email = $row['email'];
                $isActive = $row['is_active'];
                // $user_password = $row['password'];
                
                // $date = $row['creat_date'];
                

                echo "<tr>";
                echo "<td>{$user_id}</td>";
                echo "<td>{$username}</td>";
                echo "<td>{$email}</td>";
                echo "<td>{$isActive}</td>";
                echo "<td><a href='users.php?delete_user={$user_id}'>Delete</a></td>";
                echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
                echo "</tr>";

            }
                            
                            
        ?>
                        </tbody>
                    </table>
        <!--  -->
        <?php 
        if(isset($_GET['delete_user'])) {
            $user_id = $_GET['delete_user'];
            $query = "DELETE FROM admin WHERE id = {$user_id}";
            $delete_user_query = mysqli_query($conn, $query);
           
            header("Location: users.php");
        }
        
        
        ?>