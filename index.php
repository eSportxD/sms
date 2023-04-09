<?php
include'page/head.php';?>


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div>
    <style>
        nav svg {
            height: 20px;
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                 <?php
error_reporting(0);

$file=file_get_contents("https://temp-numbers.xyz/admin/API/country_catagory.php");
if($file==""){
echo' <div class="alert alert-danger font-weight-bold" role="alert" style="    width: 50%;    margin: 1rem auto;">
                     Server is Under Mantainance Please Try Again After Some Time !
                    </div>';
}else{
if($file=="[]"){
echo' <div class="alert alert-danger font-weight-bold" role="alert" style="    width: 50%;    margin: 1rem auto;">
                     Number Not Available This Time !
                    </div>';
}else{
                   
$data =  json_decode($file); 
foreach ($data as $stand) {
if($stand->Country_Name =="United Kingdom"){
$url='images/flag/uk.png';
}
if($stand->Country_Name =="United States"){
$url='images/flag/us.png';
}
if($stand->Country_Name =="Canada"){
$url='images/flag/ca.png';
}
if($stand->Country_Name =="Poland"){
$url='images/flag/pl.png';
}
if($stand->Country_Name =="Puerto Rico"){
$url='images/flag/pr.png';
}
if($stand->Country_Name =="France"){
$url='images/flag/fr.png';
}
if($stand->Country_Name =="Lithuania"){
$url='images/flag/la.png';
}
if($stand->Country_Name =="Estonia"){
$url='images/flag/et.png';
}
if($stand->Country_Name =="Netherlands"){
$url='images/flag/nl.png';
}
if($stand->Country_Name =="Belgium"){
$url='images/flag/bg.png';
}
if($stand->Country_Name =="Sweden"){
$url='images/flag/sd.png';
}
if($stand->Country_Name =="Australia"){
$url='images/flag/au.png';
}
if($stand->Country_Name =="Timor-Leste"){
$url='images/flag/tl.png';
}
if($stand->Country_Name =="Finland"){
$url='images/flag/fl.png';
}

?>            
                                <div class="col-12 col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <img src="<?php echo $url; ?>" style="width: 50px;" />
                                <h3 class="p-0 m-0"><?php echo $stand->Country_Name; ?></h3>
                            </div>
                            <div class="card-text">
                                <p class="p-0 m-0 font-weight-bold"><?php echo $stand->country_code; ?></p>
                                <p class="p-0 m-0 small"><?php echo $stand->realtime; ?></p>
                                             <a class="btn btn-primary m-2" href='list.php?id=<?php echo $stand->Country_Name; ?>'>View Numbers</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
<?php
}}}
?>                 
                           
                                                                <div class="col-12 d-none d-sm-block mt-4">
                    <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                     
                    </ul>
    </nav>

                </div>
            </div>
        </div>
    </section>
    <style>
        .pagination {
            justify-content: center;
        }
    </style>
</div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

<?php
include'page/end.php';?>

