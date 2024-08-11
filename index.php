<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background: #edf2f5;
        }
        body{padding: 30px;}
        .dropdown{
            list-style-type: none;

        }
        .dropdown a b{
            color: #fff;
        }
        .dropdown-menu{
            border-radius: 0;
            padding: 10px;
            width: 145%;
        }
        .headItem{
            margin-top: -17px;
            margin-left: 42px;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class='row'>

        <div class="panel panel-default">
            <div class="panel-heading" style="background: #ffffff;padding-bottom:
            19px;"><strong>Search for Doctor</strong>
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal"
            data-target="#addDoctor" style="float: right;">
            <i class="fa fa-plus" style="font-size: 10px;"></i>Add Doctor</a>

            <div class="modal fade" id="addDoctor">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
<h3 class="modal-title">Add Doctor</h3>
<button type="button" class="close" data-dismiss="modal" aria-label="close">
    <span aria-hidden="true">&times;</span>
</button>
                        </div>
                        <div class="modal-body">
                            <form id="postData">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"> 
                                          <label class="control-label">Doctor Name</label>
                                        </div>
                                        <div class="col-md-6"> 
                                            <input type="text" class="form-control" name="doc_name" id="doc_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label class="control-label">Doctor Speciality</label>
                                        </div>
                                        <div class="col-md-6"> 
                                            <input type="text" class="form-control" name="speciality" id="speciality">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label class="control-label">Doctor Branch</label>
                                        </div>
                                        <div class="col-md-6"> 
                                            <input type="text" class="form-control" name="branch" id="branch">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label class="control-label">Available Days</label>
                                        </div>
                                        <div class="col-md-6"> 
                                            <input type="text" class="form-control" name="days" id="days">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <label class="control-label">Status</label>
                                        </div>
                                        <div class="col-md-6"> 
                                            <select class="form-control" name="status" id="status">
                                                <option>Select</option>
                                                <option value="1">Available</option>
                                                <option value="2">Unavailable</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Add Doctor" class="btn btn-primary">

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    onclick="location.reload(true);">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="panel-body">
                <form method="POST">
                    <div class="form-group">
                        <input type="text" name="doc_name" id="s_doc_name" class="
                        form-control" placeholder="Search Doctor">
                    </div>
                </form>

            </div>

        </div>
        <table class="table" style="background: #fff;">
        <caption>List of Doctors</caption>
        <thead>
            <tr style="background: #4683de;color: #fff;">
            <th style="width:15%">Doctors names</th>
            <th style="width:30%">Speciality
            <ul class="headItem">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" style="padding: 0px 0px 
                    0px 30px;overflow-y: auto;height: 250px;">         
                    <?php
                    include('config/db.php');
                    $query = "SELECT id, speciality from datafilter";
                    $total_row = mysqli_query($connect, $query)
                    or die('error');
                    if(mysqli_num_rows($total_row)>0){
                        foreach($total_row as $row){
                            ?>
                            <li style="color: #333;font-size: 12px;font-family: 'Roboto', sans-serif;">
                            <label class="checkbox"> 
                                <input type="checkbox" id="check" name="id" value=<?php echo $row['id'];?>>
                                <?php echo $row['speciality'];?>
                            </label>
                        </li> 
                    <?php

                        }
                    }
                    else{
                        echo 'No data found!';

                    }

                    ?>
                    <div class="modal-footer">
                        <button type="submit" id="findSpeciality" class="btn btn-primary btn-sm">Apply</button>
                    </div>   

                    </ul> 
                </li>
            </ul></th>
            <th style="width:30%">Branch
            <ul class="headItem">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <b class="caret"> </b>
                    </a>
                </li>
            </ul></th>
            <th style="width:30%">Days
            <ul class="headItem">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <b class="caret"> </b>
                    </a>
                </li>
            </ul></th>
            <th style="width:30%">
                <select class="form-control" id="task">
                    <option>Status</option>
                    <?php 
                    $query = "SELECT * from status";
                    $total_row = mysqli_query($connect, $query) or
                    die ('error');
                    if(mysqli_num_rows($total_row)>0){
                        foreach($total_row as $row){
                    ?>
                    <option id="taskId" name="id" value=<?php echo 
                    $row['status_id'];?>><?php echo $row['taskStatus']?>
                    </option>
                    
                    <?php
                        }
                    }
                    else{
                        echo 'No Data Found';
                    }


                    ?>
                </select>
            </th>

        </thead>
        <tbody id="post_list">

        </tbody>

        </table>

        </div>

    </div>
    
</body>
</html>
<script type="text/javascript">
    fetchData();
    function fetchData(){
        var action = 'fetchData';
        $.ajax({
            url: "action.php",
            method:"POST",
            data: {action:action},
            success: function(data){
                $('#post_list').html(data);
                //alert(data);
            }
        });
    }

    $(document).ready(function(){

        $('#postData').submit(function(event){
            event.preventDefault();

            var doc_name = $('#doc_name').val();
            var speciality = $('#speciality').val();
            var branch = $('#branch').val();
            var days = $('#days').val();
            var status = $('#status').val();
            if(doc_name != "" || speciality != "" || branch != "" || days != ""
            || status != ""){
                $.ajax({
                    url:'upload.php',
                    type:"POST",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    success: function(data){
                        alert(data);
                        $('#addDoctor').modal('hide');
                        location.reload();
                    }

                });
            }
            else{
                alert('Please fill all details');
            }

        });
    });
    $('#findSpeciality').click(function(event){
            event.preventDefault();
            var action = 'searchSpeciality';
            var arr = [];
            $.each($("input[name='id']:checked"), function(){
                arr.push($(this).val());
            });
            //alert(arr);
            $.ajax({
                 url: "action.php",
                 method: "POST",
                 data: {action:action, arr:arr},
                 success: function(data){
                    //alert(data);
                    $('#post_list').html(data);
                 }
             });
        });
        $('#task').on('change', function(){
            event.preventDefault();
            var action = 'searchByStatus';
            var status_id = $(this).val();
            $.ajax({
                 url: "action.php",
                 method: "POST",
                 data: {action:action, status_id:status_id},
                 success: function(data){
                    //alert(data);
                    $('#post_list').html(data);
                 }
             });
        });
    $(document).ready(function(){
        $('#s_doc_name').keyup(function(event){
            event.preventDefault();
            var action = 'searchRecord';
            var doc_name = $('#s_doc_name').val();
            if(doc_name != ''){

                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: {action:action, doc_name:doc_name},
                    success: function(data){
                        //alert(data);
                        $('#post_list').html(data);
                    }
                });
            }
        });
    });

</script>
