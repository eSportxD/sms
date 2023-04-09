
<?php
include'page/head.php';?>
 
       <?php
error_reporting(0);
$get_id=$_GET['id'];
$country=$_GET['country'];
if($country==""){
$echo=' <div class="alert alert-danger font-weight-bold" role="alert" style="    width: 50%;    margin: 1rem auto;">
                     Someting Went Wrong !
                    </div>';
}else{   
if($get_id==""){
$echo=' <div class="alert alert-danger font-weight-bold" role="alert" style="    width: 50%;    margin: 1rem auto;">
                     Someting Went Wrong !
                    </div>';
}else{                    
$string = str_replace(' ', '%2B', $get_id);
$string2 = str_replace(' ', '', $get_id);
$file=file_get_contents("https://temp-numbers.xyz/API/getAllMessages.php?no=$string");
if($file==""){
$echo=' <div class="alert alert-danger font-weight-bold" role="alert" style="    width: 50%;    margin: 1rem auto;">
                     Server is Under Mantainance Please Try Again After Some Time !
                    </div>';
}else{             
if($file=="[]"){
$echo=' <div class="alert alert-danger font-weight-bold" role="alert" style="    width: 50%;    margin: 1rem auto;">
                     Numbers: +'.$string2.' is Offline !
                    </div>';
}else{
$echo=' <div class="alert alert-success font-weight-bold" role="alert" style="    width: 50%;    margin: 1rem auto;">
                     Numbers: +'.$string2.' is Online !
                    </div>';

}}}}
?>

 
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                   <?php echo $echo;?>
                    <p>
                        <a onClick="window.location.reload();" class="btn btn-primary">Update SMS</a>
                        <a href="list.php?id=<?php echo $country;?>" class="btn btn-secondary">Change number</a>
                    </p>
                    <div class="col-12">
                        <div class="card">
                        
                        </div>
                    </div>
                    <?php


$file=file_get_contents("https://temp-numbers.xyz/API/getAllMessages.php?no=$string");
       
$data =  json_decode($file); 
foreach ($data as $stand) {
?>
                    <div class="card m-2 text-center" style="    background-color: #5f9ea02e;">
                        <div class="card-header">
                            <span class="mt-0"> From: <a><?php echo $stand->FromNumber; ?></a></span>
                        </div>
                        <div class="card-body">
                           <?php echo $stand->Messagebody; ?>  - From simcodes
                            <div class="clear"></div>
                            <footer class="blockquote-footer float-right" style="margin-top:0em;margin-bottom:0em;"> <?php echo $stand->message_time; ?></footer>
                        </div>
                    </div>
<?php
}
?>                    
                             <div class="d-none d-sm-block">
                        <nav>
                            <ul class="pagination">
 
                                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>
 
 
 
 
 
                                                  </ul>
                        </nav>
 
                    </div>
                </div>
                <style>
                    .pagination {
                        justify-content: center;
                    }
                </style>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->
 
<?php
include'page/end.php';?>

