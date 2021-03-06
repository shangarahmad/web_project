<?php

include('connection.php');
include('component.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <script src="https://kit.fontawesome.com/90fc5f763b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='style.css' />
    
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>    
  
  <div class="containor text-center">
      <h1 class="py-4 text-dark rounded bg-warning"><i class="fas fa-user-circle"></i> Job Application</h1>
        <div class="d-flex justify-content-center">
            <form action="add.php" method="post" class="w-50">
                    <div class="pt-2">
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-user fa-2x'></i>","Full Name", "full_name",""); ?>

                    


                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-phone-square fa-2x'></i>","Phone Number","phone_number",""); ?>
                </div>
                
                          
                    <div>
                      <div class="row pt-2">
                        
                        <div class="input-group mb-2 col">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-warning"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                        </div>
                              <select class="form-select" id="autoSizingSelect" name="City">
                                <option value="Erbil" selected>Erbil</option>
                                <option value="Sulaymaniyah">Sulaymaniyah</option>
                                <option value="Kirkuk">Kirkuk</option>
                                <option value="Duhok">Duhok</option>
                                <option value="Halabja">Halabja</option>
                              </select>
                            </div>

                  <div class="col">
                        <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-warning"><i class="far fa-envelope fa-2x"></i></div>
                        </div>
                        <input type="email" name='Email' value='' autocomplete="off" placeholder='Email' class="form-control" id="inputEmail3" placeholder="Username">
                 </div>
                </div>


                <div class="row pt-2">

                        <div class="col">
                         <div class="input-group mb-2 col">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-warning"><i class="fas fa-venus-mars fa-2x"></i></div>
                        </div>
                              <select class="form-select" id="autoSizingSelect" name="Gender">
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                              </select>
                            </div>
                       </div>
                      
                       <div class="col">
                         <div class="input-group mb-2 col">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-warning"><i class="fas fa-graduation-cap fa-2x"></i></div>
                        </div>
                              <select name="Major" class="form-select" id="autoSizingSelect">
                                <option value="High school" selected>High school</option>
                                <option value="Diploma">Diploma </option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Master">Master</option>
                                <option value="Doctoral">Doctoral</option>
                              </select>
                            </div>
                       </div>



                      
                 </div>
                </div>

                <div class="pt-4">
                      <div class="input-group-text bg-warning "><i class="fas fa-briefcase fa-2x text-center" style="display: block;margin: auto;"></i></div>
                      <textarea class="form-control" name="education" rows="3" placeholder="Experience"></textarea>
                </div>

				<div class="pt-4">
					  <div class="input-group-text bg-warning "><i class="fas fa-briefcase fa-2x text-center" style="display: block;margin: auto;"></i></div>
					  <textarea class="form-control" name="experience" rows="3" placeholder="Experience"></textarea>
				</div>

				
						
							<div>
								
								<div class="row pt-4">
                         <div class="input-group mb-2 row">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-dark text-white" style="width: 510px;"><i class="fas fa-file-word fa-2x"></i></div>
                        </div>
                        <div style="position: absolute;left: 80px;top: 12px; z-index: 1; width: 450px; color: yellow"><input type="range" value="0" class="form-range" id="customRange1" name="word"></div>
                             
                            </div>

                            <div class="input-group mb-2 row pt-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-dark text-white" style="width: 510px;"><i class="fas fa-file-powerpoint fa-2x"></i></div>
                        </div>
                        <div style="position: absolute;left: 80px;top: 18px; z-index: 1; width: 450px; color: yellow"><input type="range" value="0" class="form-range" id="customRange2" name="power"></div>
                             
                            </div>

                            	   <div class="input-group mb-2 row pt-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-dark text-white" style="width: 510px;"><i class="fas fa-file-excel fa-2x"></i></div>
                        </div>
                        <div style="position: absolute;left: 80px;top: 18px; z-index: 1; width: 450px; color: yellow"><input type="range" value="0" class="form-range" id="customRange3" name="excel"></div>
                             
                            </div>
						</div>

				    

                         

                       <div class="pt-4">
                       	      	   <div class="input-group mb-2 row pt-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-dark text-white" style="width: 480px;">English</div>
                        </div>
                        <div style="position: absolute;left: 90px;top: 14.5px; z-index: 1; width: 400px; color: yellow"><input type="range" value="0" value="0" class="form-range" id="customRange4" name="English"></div>
                    </div>
                             
                            
                        			   <div class="input-group mb-2 row pt-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-dark text-white" style="width: 480px;">Arabic</div>
                        </div>
                        <div style="position: absolute;left: 90px;top: 14.5px; z-index: 1; width: 400px; color: yellow"><input type="range" value="0" class="form-range" id="customRange4" name="Arabic"></div>
                             
                            </div>


                            	   <div class="input-group mb-2 row pt-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-dark text-white" style="width: 480px;">Persion</div>
                        </div>
                        <div style="position: absolute;left: 90px;top: 14.5px; z-index: 1; width: 400px; color: yellow"><input type="range" value="0" class="form-range" id="customRange6" name="Persion"></div>
                             
                            </div>

                               	   <div class="input-group mb-2 row pt-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text bg-dark text-white" style="width: 480px;">Turkish</div>
                        </div>
                        <div style="position: absolute;left: 90px;top: 14.5px; z-index: 1; width: 400px; color: yellow"><input type="range" value="0" class="form-range" id="customRange7" name="Turkish"></div>

                       </div>
                       </div>

							</div>




                           


                      


              
                

                  <div class="d-flex">
                    <button name='btn-create' data-toggle='tooltip' data-placement='bottom' title='Create' class='btn bg-warning text-dark rounded' id='create'><i class='fas fa-plus'></i></button>

                    <button name='btn-read' data-toggle='tooltip' data-placement='bottom' title='Read' class='btn bg-warning text-dark rounded' id='create'><i class='fas fa-sync'></i></button>

                    <button name='btn-update' data-toggle='tooltip' data-placement='bottom' title='Update' class='btn bg-warning text-dark rounded' id='create'><i class='fas fa-pen-alt'></i></button>

                    <button name='btn-delete' data-toggle='tooltip' data-placement='bottom' title='Delete' class='btn bg-warning text-dark rounded' id='create'><i class='fas fa-trash-alt'></i></button>

                       
                </div>



          </form>
        
      </div>

      <div class="d-flex table-data pt-6" style="position:absolute;left: 0px;">
        
        <table class="table table-striped table-dark">
          <thead class="thead-dark">
            <tbody>
                        
                          <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Major</th>
                        <th>Education</th>
                        <th>Experience</th>
                        <th>Word</th>
                        <th>Power</th>
                        <th>Excel</th>
                        <th>English</th>
                        <th>Arabic</th>
                        <th>Persion</th>
                        <th>Turkish</th>
                        <th>Edit</th>

                    </tr>



                <?php
                $sql = "SELECT * FROM table_Job";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        /// 
                        echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['FName']."</td>";
                            echo "<td>".$row['P_number']."</td>";
                            echo "<td>".$row['City']."</td>";
                            echo "<td>".$row['Email']."</td>";
                            echo "<td>".$row['Gender']."</td>";
                            echo "<td>".$row['Major']."</td>";
                            echo "<td>".$row['Education']."</td>";
                            echo "<td>".$row['Experience']."</td>";
                            echo "<td>"."%".$row['Word']."</td>";
                            echo "<td>"."%".$row['Power']."</td>";
                            echo "<td>"."%".$row['Excel']."</td>";
                            echo "<td>"."%".$row['English']."</td>";
                            echo "<td>"."%".$row['Arabic']."</td>";
                            echo "<td>"."%".$row['Persion']."</td>";
                            echo "<td>"."%".$row['Turkish']."</td>";
                            echo "<td><a href='edit.php?id=".$row['id']."'><i class='fas fa-pen-alt text-white'></i></a></td>";
                        echo "<tr/>";
                    }
                } else {
                    echo "0 results";
                }
?>
            </tbody>
                  
                </thead>

        </table>
      </div>
      
       
  </div>
</body>
</html>

