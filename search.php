<?php
$conn = mysqli_connect("localhost", "root", "", "shop");
if (!$conn) {
    die("no connection");
}

$category = $_POST["category"];

if ($category === "") {
    $query = "SELECT * FROM clothing_items";
} else {
    $stmt = $conn->prepare("SELECT * FROM clothing_items ci 
                            INNER JOIN categories ca ON ca.id = ci.category_id 
                            WHERE ca.type LIKE ?");
    $category = '%' . $category . '%';
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    $clothingItems = '';
    while ($row = $result->fetch_assoc()) {
        $clothingItems .= '<div class="clothing-item">';
        $clothingItems .= "<img src='images/" . $row['image_url'] . "' >";
        $clothingItems .= '<div class="heart-icon">&#x2665;</div>';
        $clothingItems .= '<h3>' . $row['name'] . '</h3>';
        $clothingItems .= '<div class="colors">';
        $colors = explode(', ', $row['available_colors']);
        foreach ($colors as $color) {
            $clothingItems .= '<span class="color ' . $color . '"></span>';
        }
        $clothingItems .= '</div>';
        $clothingItems .= '<p>' . $row['description'] . '</p>';
        $clothingItems .= '<div class="rating">';
        for ($i = 0; $i < $row['rating']; $i++) {
            $clothingItems .= '<span class="star">&#9733;</span>';
        }
        $clothingItems .= '</div>';
        $clothingItems .= '</div>';
    }
    echo $clothingItems;
}

$conn->close();
?>
