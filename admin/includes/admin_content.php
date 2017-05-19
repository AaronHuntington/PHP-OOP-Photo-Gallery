<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php

                // $result_set = user::find_all_users();
                // while($row = mysqli_fetch_array($result_set)){
                //     echo $row['username']."<br>"; 
                // }


                // $found_user = user::find_user_by_id(2);
                // echo $found_user['username'];

                // $found_user = user::find_user_by_id(1);
                // $user = user::instantation($found_user);

                // echo $user->username;
                // echo "<br>";

                // $users = user::find_all_users();

                // foreach($users as $user){
                //     echo $user->last_name."<br>";
                // }

                $found_user = user::find_user_by_id(1);
                echo $found_user->username;


            ?>



            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
</div>