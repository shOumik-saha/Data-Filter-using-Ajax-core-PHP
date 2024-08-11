<?php
include("config/db.php");
if(isset($_POST['action'])){
    //$output ='';

    if($_POST['action'] == 'fetchData'){

        $query = "SELECT * FROM datafilter
        JOIN status ON datafilter.status = status.status_id
        ORDER BY datafilter.id DESC";
        getData($query);
    }
    if($_POST['action'] == 'searchRecord'){
        $doc_name = $_POST['doc_name'];
        $query = "SELECT * FROM datafilter
                JOIN status ON datafilter.status = status.status_id
                WHERE doc_name LIKE '%$doc_name%'
                ORDER BY datafilter.id DESC";
        getData($query);
    }
    if($_POST['action'] == 'searchSpeciality'){
        $speciality_id = $_POST['arr'];
        //print_r($speciality_id);
         foreach($speciality_id as $id){
            $query = "SELECT * 
            FROM datafilter
            JOIN status ON datafilter.status = status.status_id
            WHERE datafilter.id = '$id' ORDER BY datafilter.id DESC";
            getData($query);
        }
     }
     if($_POST['action'] == 'searchByStatus'){
        $status_id = $_POST['status_id'];

        $query = "SELECT *
        FROM datafilter
        JOIN status ON datafilter.status=status_id
        WHERE status.status_id = '$status_id'";
        getData($query);
     }
}
        function getData($query){
            include("config/db.php");
            $output = "";
            $total_row = mysqli_query($connect, $query) or die ('error');
            if(mysqli_num_rows($total_row)>0){
                foreach($total_row as $row){

                    $output .= '
                    <tr>
                    <td>'.$row['doc_name'].'</td>
                    <td>'.$row['speciality'].'</td>
                    <td>'.$row['branch'].'</td>
                    <td>'.$row['days'].'</td>
                    <td>'.$row['taskStatus'].'</td>
                    <td>
                    </tr>
                    ';

                }

            }
            else{
                $output = "<h4>not found!</h4>";
            }
            echo $output;
        }
?>