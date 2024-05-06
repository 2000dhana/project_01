<!-- <?php

include 'connect.php';

// Process form data when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];

    // File upload path
    $targetDir = "images/";
    $targetFilePath = $targetDir . basename($image);
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $sql = "INSERT INTO listings (Name, Description, Price, Photo) VALUES ('$name', '$description', '$price', '$image')";
            if ($con->query($sql) === TRUE) {
                echo "Property added successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
    }
}

// Close connection
$con->close();
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Listing Form</title>

    <style>
            .table-container {
            max-height: 400px; /* Adjust the height as needed */
            overflow-y: auto; /* Enable vertical scrolling */
        }
                table, td, th {  
                border: 1px solid #ddd;
                text-align: left;

                }

                table {
                border-collapse: collapse;
                width: 100%;
                margin: 0px 10px;
                }

                th, td {
                padding: 15px;
                }
                
                .tablebtn{
                    padding: 5px;
                    font-size: 12px;
                    border: 1px solid;
                    border-radius: 10px;
                    margin: 0px 3px;
                    background: white;
                }

                h3{
                    Margin: 25px 6%;
                    margin-bottom: 50px;
                }

                .realestateagent-table{
                display: flex;
                max-width: 1000px;
                margin: auto;
                padding: 0 0 40px 0 ;
                /* max-height: 500px; */
}

            </style>
</head>
<body>
    <div class="container">
        <h2>Add a New Property Listing</h2>
        <form method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required><br><br>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="table-container">
    <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>

            </tr>
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .main{
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
   max-width: 1100px;
   margin: 50px auto;
}

.table-container {
            max-height: 400px; /* Adjust the height as needed */
            overflow-y: auto; /* Enable vertical scrolling */
        }
                table, td, th {  
                border: 1px solid #ddd;
                text-align: left;

                }

                table {
                border-collapse: collapse;
                width: 100%;
                margin: 0px 10px;
                }

                th, td {
                padding: 15px;
                }
                
                .tablebtn{
                    padding: 5px;
                    font-size: 12px;
                    border: 1px solid;
                    border-radius: 10px;
                    margin: 0px 3px;
                    background: white;
                }

                h3{
                    Margin: 25px 6%;
                    margin-bottom: 50px;
                }

                .realestateagent-table{
                display: flex;
                max-width: 1000px;
                margin: auto;
                padding: 0 0 40px 0 ;
                /* max-height: 500px; */
}

.upper {
    display:grid;
    grid-template-rows: 100px 150px 150px;
    grid-template-columns: 400px 300px 300px;
    margin: auto;
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    max-width: 1000px;
    padding: 25px;

}

.lower {
    display:grid;
    grid-template-rows: 100px 150px 150px;
    grid-template-columns: 400px 300px 300px;
    margin: auto;
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    max-width: 1000px;
    padding: 25px;

}

.lower-item1{
    grid-row: 1/4;
    grid-column: 1/3;
    border: 1px solid;
    margin: 0px 15px 0px 15px;
    border-radius: 30px;
    padding: 10px;
}

.lower-item2{
    grid-row: 1/4;
    grid-column: 3/4;
    border: 1px solid;
    margin: 0px 15px 0px 15px;
    border-radius: 30px;
    padding: 10px;
}
.upper-item1{
    grid-row: 1/4;
    grid-column: 1/2;
    border: 1px solid;
    margin: 15px;
    border-radius: 30px;
    padding: 10px;

}

.upper-item2{
    grid-row: 1/4;
    grid-column: 2/4;
}


  .top-icon{
    height: 50px;
    width: 50px;
  }

  .profile-picture{
    height: 75px;
    width: 75px;
    border-radius: 50%;
    background-color: #c2c2c2;
    margin: auto;
    margin-bottom: 15px ;
    margin-top: 15px;

  }

  .profbtn{
    background-color: white;
    color: black;
    padding: 12px;
    font-size: 12px;
    border: 1px solid;
    border-radius: 10px;
    margin: 10px 10px 10px 10px;
  }

  .profile-buttons{
    display: flex;
    flex-direction: column;

  }

  #dash{
    margin: 20px 0px 0px;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #5a5a5a;
  }

  #dash-p{
    margin-top: 5px;
    max-width: 250px;
    font-size: small;

  }

  .item3-icon{
    height: 50px;
    width: 50px;
    margin: auto;
  }

  #totalproperties{
    margin: 0px;
    padding: 10px 0px
  }

  #total-h2{
    margin: auto;
    color: #5a5a5a;
  }

  .item4-left{
    margin: 20px 15px;
    padding: 0px;
  }

  .prop-sale{
    margin: 7px 0px 7px 0px;
  }

.item4-right{
  margin-right: 20px;
}

.item5-left{
  margin: 20px 15px;
  padding: 0px;
}

.item5-right{
  margin-right: 20px;
}



h2,
h3 {
  margin-bottom: 10px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

input[type=text], [type=file], [type=number], textarea{
  width: 100%;
  padding: 6px 20px;
  margin: 1px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #6495ED;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


form {
  border-radius: 5px;
  padding: 20px;
  max-width: 500px;
  margin: auto;

}

    </style>
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="main">
        <div class="upper">
            <div class="upper-item1">
                <div class="profile-picture"></div>
                <div class="profile-buttons">
                    <button onclick="myFunction()" class="profbtn">Add/Remove listings</button>
                    <button onclick="myFunction()" class="profbtn">Add/Remove user</button>
                    <button onclick="myFunction()" class="profbtn">Manage Agents</button>
                    <button onclick="myFunction()" class="profbtn">User Inquiries</button>

                </div>
            </div>
            <div class="upper-item2">
            <div class="table-container">
                <table>
                        <tr> 
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>

                        </tr>

                        <?php
                            include 'connect.php';
                            $sql="Select * from listings";
                            $result= mysqli_query($con, $sql);
                            if ($result){
                                while($row=mysqli_fetch_assoc($result)){
                                    $id = $row['ID'];
                                    $name = $row['Name'];
                                    $description = $row['Description'];
                                    $price = $row['Price'];
                                    $image = $row['Photo'];

                                    echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$description.'</td>
                                    <td>'.$price.'</td>
                                    <td><img src="images/' .$image. '" width="100"></td>
                                    <td>
                                    <button class="tablebtn"><a href="updatelisting.php?updateid='.$id.'">Update</a></button>
                                    <button class="tablebtn"><a href="deletelisting.php?deleteid='.$id.'">Delete</a></button>
                                    </td>
                                    
                                    </tr>';
                                }
                            }

                        ?>
                </table>
            </div>
            </div>
        </div>
        <div class="lower">
            <div class="lower-item1">

            </div>
            <div class="lower-item2">
            <h2>Add a New Property Listing</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="text" id="name" name="name" required>

            <textarea id="description" name="description" rows="4" cols="20" required></textarea>
            
            <input type="number" id="price" name="price" required><br><br>
            
            <input type="file" id="image" name="image" accept="image/*" required><br><br>
            
            <input type="submit" value="Submit">
        </form>
            </div>
        </div>
    </div>
</body>
</html>