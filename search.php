<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Collection</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
<div class="clothing-container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "shop");
    if (!$conn) {
        die("no connection");
       }

    $category = $_POST["category"] ;
    if($category == "All")
    {
        $query = "SELECT * FROM clothing_items ";

        $result = $conn->query($query);
        
        while ($row = $result->fetch_assoc()) {
            echo '<div class="clothing-item">';
            echo "<img src='images/".$row['image_url']."' >";
            echo '<div class="heart-icon">&#x2665;</div>';
            echo '<h3>' . $row['name'] . '</h3>';
            echo '<div class="colors">';
            
            $colors = explode(', ', $row['available_colors']);
            
            foreach ($colors as $color) {
                 echo '<span class="color ' . $color . '"></span>';
            }
            echo '</div>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<div class="rating">';
            for ($i = 0; $i < $row['rating']; $i++) {
                echo '<span class="star">&#9733;</span>';
            }
            echo '</div>';
            echo '</div>';
        }
    }

    else {
        $stmt = $conn->prepare("SELECT * FROM clothing_items ci 
                                INNER JOIN categories ca ON ca.id = ci.category_id 
                                WHERE ca.type = ?");
                        
        $stmt->bind_param("s", $category);
        $stmt->execute();

        $result = $stmt->get_result();


       while ($row = $result->fetch_assoc()) {
          echo '<div class="clothing-item">';
          echo "<img src='images/".$row['image_url']."' >";
          echo '<div class="heart-icon">&#x2665;</div>';
          echo '<h3>' . $row['name'] . '</h3>';
          echo '<div class="colors">';
    
          $colors = explode(', ', $row['available_colors']);
    
          foreach ($colors as $color) {
             echo '<span class="color ' . $color . '"></span>';
          }
          echo '</div>';
          echo '<p>' . $row['description'] . '</p>';
          echo '<div class="rating">';
        for ($i = 0; $i < $row['rating']; $i++) {
            echo '<span class="star">&#9733;</span>';
        }
        echo '</div>';
        echo '</div>';
     }
    }
$conn->close();
?>


    </div>

</body>
</html>
    
</body>
</html>