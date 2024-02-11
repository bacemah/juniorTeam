<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Collection</title>
    <link rel="stylesheet" href="shop.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <header>
        <a href="#" class="logo">Logo</a>
        <div class="group">
            <ul class="navigation">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="search">
                <span class="icon">
                   <ion-icon name="search-outline" class="searchbtn"></ion-icon>
                   <ion-icon name="close-outline" class="closebtn"></ion-icon>
                </span>
            </div>
            <ion-icon name="menu-outline" class="menutoggle"></ion-icon>
        </div>
        <div class="filter-bar">
            <input type="text" id="categorySearch" placeholder="Search for a category . . .">
         </div>
    </header>

    

    <section class="displayed_itmes">
        <div class="clothing-container" id="clothingContainer">
            <!-- Clothing items will be displayed here -->
        </div>
    </section>
    <section class="all-items">
    <div class="clothing-container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "shop");
    if (!$conn) {
        die("no connection");
       }

    $query = "SELECT * FROM clothing_items WHERE rating=5";

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
        echo '<p>' . $row['price'] . '</p>';
        echo '<div class="rating">';
        for ($i = 0; $i < $row['rating']; $i++) {
           echo '<span class="star">&#9733;</span>';
        }
        echo '</div>';
        echo '</div>';
    }

    $conn->close();
    ?>


    </div>
    </section>
    

    <script>
    $(document).ready(function(){
        $("#categorySearch").on("keyup", function() {
            var category = $(this).val();
            $.ajax({
                url: "search.php",
                type: "POST",
                data: { category: category },
                success: function(data) {
                $("#clothingContainer").html(data); 
                if (category.trim() === "") {
                    $(".all-items").show(); 
                } else {
                    $(".all-items").hide(); 
                }
            }
        });
    });
});
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>


        let searchbtn = document.querySelector('.searchbtn') ;
        let closebtn = document.querySelector('.closebtn') ;
        let filter_bar =  document.querySelector('.filter-bar') ;
        let navigation = document.querySelector('.navigation') ;
        let menutoggle = document.querySelector('.menutoggle') ;
        let header = document.querySelector('header') ;


        

        searchbtn.onclick = function(){
            filter_bar.classList.add('active') ;
            closebtn.classList.add('active') ;
            searchbtn.classList.add('active') ;
            menutoggle.classList.add('hide') ;
            header.classList.remove('open') ;
            

        }
        closebtn.onclick = function(){
            filter_bar.classList.remove('active') ;
            closebtn.classList.remove('active') ;
            searchbtn.classList.remove('active') ;
            menutoggle.classList.remove('hide') ;

        }
        menutoggle.onclick = function(){
            header.classList.toggle('open') ;
            filter_bar.classList.remove('active') ;
            closebtn.classList.remove('active') ;
            searchbtn.classList.remove('active') ;

        }


    </script>

    <script>
        var slideimg = document.getElementById('slideimg') ;
        var images = [
            "images/slider_01.jpg",
            "images/slider_02.jpg",
            "images/slider_03.jpg"
        ];
        var len = images.length ;
        var i = 0 ;

        function slider(){
            if(i > len-1){
                i=0 ;
            }
            slideimg.src = images[i] ;
            i++ ;
            setTimeout(slider, 3000);
        }

        
        window.onload = slider;
    </script>

</body>
</html>