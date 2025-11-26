<?php 

//!GET method
    // if($_SERVER['REQUEST_METHOD']==='GET'){
    //     if(isset($_GET['term'])){

    //         $search_term=$_GET['term'];
           
    //     if($search_term){
    //         echo "<p>The result of the search for : <b>$search_term</b></p>";
    //     }
    //     }
        
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET method</title>
</head>
<body>
    <form action="search.php" method="get">
        <div>
            <label for="term">Search</label>
            <input type="search" name="term" placeholder="Enter search term">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php 
//!To prevent XSS attacks, before displaying user input on a webpage, you should always escape the data using the htmlspecialchars() function.

if($_SERVER['REQUEST_METHOD']==='GET'){
    if(isset($_GET['term'])){
        //get the search term form the \url
        $term = $_GET['term'];
    }
    if($term){
        $clean_term = htmlspecialchars($term,ENT_QUOTES,'UTF-8');
          // perform search and show the result
            echo "<p>The result of the search for <b>$clean_term</b>:</p>";

    }
}

?>