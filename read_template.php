<?php
// total records
echo "<div style='margin-bottom:30px'>";
 	echo "<h2>We've got $total_rows lovely products that you may be interested in</h2></div>";



// search form
echo "<div class='right-button-margin'>";
  echo "<form role='search' action='search.php'>";
    echo "<div class='input-group col-md-3 pull-right margin-right-1em'>";
        $search_value=isset($search_term) ? "value='{$search_term}'" : "";
        echo "<input type='text' class='form-control' placeholder='Type product name or description...' name='s' id='srch-term' required {$search_value} />";
        echo "<div class='input-group-btn'>";
            echo "<button class='btn btn-primary' type='submit'><i class='glyphicon glyphicon-search'></i></button>";
        echo "</div>";
    echo "</div>";
echo "</form>";
echo "</div>";
 
// display the products if there are any
if($total_rows>0){
 

 	
 echo "<table class='table table-hover table-responsive'>";
        echo "<tr>";
            echo "<th>Product</th>";
            echo "<th>Price</th>";
            echo "<th>Description</th>";
            echo "<th>Category</th>";
             echo "<th>Image</th>";
            echo "<th>Actions</th>";
        echo "</tr>";
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
 
            extract($row);
 
            echo "<tr>";
                echo "<td>{$name}</td>";
                echo "<td><strong>&#163; {$price}</strong></td>";
                echo "<td>$description</td>";
                echo "<td>";
                    $category->id = $category_id;
                    $category->readName();
                    echo $category->name;
                echo "</td>";
                echo "<td>";
        echo $image ? "<img src='uploads/{$image}' style='width:50px;' />" : "No image found.";
    echo "</td>";
                echo "<td>";
 
                    // read product button
                    echo "<a href='read_one.php?id={$id}'>";
                        echo "<span class='glyphicon glyphicon-zoom-in gi-2x'></span>";
                    echo "</a>";
 
                    // edit product button
                    echo "<a href='update_product.php?id={$id}'>";
                        echo "<span class='glyphicon glyphicon-edit gi-2x'></span>";
                    echo "</a>";
 
                    // delete product button
                    echo "<a delete-id='{$id}' class='delete-object'>";
                        echo "<span class='glyphicon glyphicon-remove gi-2x'></span>";
                    echo "</a>";
 
                echo "</td>";
 
            echo "</tr>";
 
        }
 
    echo "</table>";
 
    // paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no products
else{
    echo "<div class='alert alert-danger'>No products found.</div>";
}
?>