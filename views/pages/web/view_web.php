<div id="navbar-top">
    <img src="https://lh3.googleusercontent.com/-cXa1MHlPBUo/Xf9WDfsLPHI/AAAAAAAAAnE/mUON6W85gwIFLkjxejuWvuIZviAqfzIBwCK8BGAsYHg/s300/logo-major.jpg" class="img-fluid" alt="" style="width: 188px; height:61px;">
    <a href="index.php?action=view"><i class="fa fa-door-open text-dark meun-text" style="margin-left:83%"></i></b></a>
</div>
<div class="handle"></div>
<div id="wrapper">
    <div id="navbar-side">
        <ul>
            <li><a href="index.php?action=home"><i class="fa fa-home text-light"></i><span class="menu-text">Home</span></a></li>
            <li>
                <a href="#"><i class="fa fa-file fa-caret-square-o-down"></i><span class="menu-text">Major</span><b class="fa fa-angle-left"></b></a>
                <ul>
                    <li><a href="index2.php?action=view_web"><i class="fa fa-code text-light"></i><span class="menu-text">WEB</span></a></li>
                    <li><a href="index1.php?action=view_sna"><i class="fa fa-window-restore text-light"></i><span class="menu-text">SNA</span></a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="main"></div>
</div>

<div class="container">
    <div class="row mb-3">
        <div class="col-md-1"></div>
        <div class="col-md-11" style="margin-top: 100px">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add New</a>
            <!-- index.php?action=add -->
            <!-- The Modal of Add-->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="index2.php?action=form_data" method="post" enctype="multipart/form-data">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h2 class="text-success font-weight-bold text-center">WEP Register</h2>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body"  style="background-color: lightgray;">
                                <div class="form-group">
                                    <label for="name"><strong>Firstname</strong></label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="name"><strong>Lastname</strong></label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="class">Class:</label>
                                    <select name="class" id="class" class="form-control" required>
                                        <option value="">Choose Class</option>
                                        <option value="2021-A">2021-A</option>
                                        <option value="2021-B">2021-B</option>
                                        <option value="2021-B">2021-C</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sex"><strong>Gender</strong></label><br>
                                    <input type="radio" name="sex" value="Male">Male <br>
                                    <input type="radio" name="sex" value="Female">Female
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>Email</strong></label>
                                    <input type="text" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>Reason</strong></label>
                                    <textarea name="reason" id="reason" cols="10" rows="5" class="form-control" required></textarea>  
                                </div>
                                <div class="form-group">
                                    <label for="class">Major:</label>
                                    <select name="major" id="major" class="form-control" required>
                                        <option value="WEP">WEP</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="file"><strong>Profile</strong></label><br>
                                    <input type="file" name="profile" id="file">
                                </div>   
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <a href="index2.php?action=view_web" class="btn btn-outline-danger" style="margin-right: 302px;">Go Back</a>
                                <input type="submit" name="create" value="Submit" class="btn btn-outline-primary float-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The End Modal of Add-->
</div>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
        
            <!-- View data of student in table -->
            <table class="table table-bordered " style="color: white;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fullname</th>
                        <th>Class</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Major</th>
                        <th>Reason</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    if(isset($data['student_data'])){
                        $id = 1;
                        foreach($data['student_data'] as $rows){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $rows ['first_name']." ". $rows ['last_name']?></td>
                        <td><?php echo $rows ['class']?></td>
                        <td><?php echo $rows ['gender']?></td>
                        <td><?php echo $rows ['email']?></td>
                        <td><?php echo $rows ['major']?></td>
                        <td><?php echo $rows ['reason']?></td>
                        <td>               
                            <a href="index2.php?action=detail&id=<?php echo $rows['id'];?>" ><i class="material-icons text-success">remove_red_eye</i></a>  
                            <a href="index2.php?action=edit&id=<?php echo $rows['id'];?>"><i class="material-icons text-primary">edit</i></a>
                            <a href="index2.php?action=delete&id=<?php echo $rows['id'];?>"><i class="material-icons text-danger" onclick="return confirm('Are you sure you want to delete?');">delete</i></a>
                        </td>
                    </tr>
                </tbody>
                <?php
                    $id++;
                        }
                    }
                ?>
            </table>
        </div>
    </div>
    <!--The end View data of student in table -->
</div>
<script src="js/code.js"></script>
</body>

</html>