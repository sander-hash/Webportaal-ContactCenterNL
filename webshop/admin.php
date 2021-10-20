<?php
include 'function.php';
$artikelnaam = "";
$soort = "";
$omschrijving = "";
$prijs = "";
$id = '';
$update = false;
$updateItem = false;
$deleteItem = false;



if (isset($_POST['btnSubmit'])){
    if (productInvoeren())
        $status = "Product is ingevoerd";
    else
        $status = "Product is niet ingevoerd";
        
}
if(isset($_GET['id']) && $_GET['action'] === 'delete'){
    deleteItem($id, $artikelnaam, $soort, $omschrijving, $prijs);
    }
if (isset($_GET['id']) && $_GET['action'] === 'edit'){
   include 'database.php';
   $update = true;
    $id = $_GET['id'];
    $query = $connect->query("SELECT * FROM webshop WHERE artikelnummer=$id");
    $row = $query->fetch();
    $artikelnaam = $row['artikelnaam'];
    $soort = $row['soort'];
    $omschrijving = $row['omschrijving'];
    $prijs = $row['prijs'];
}
if(isset($_POST['btnUpdate'])){
    include 'database.php';
    $id = $_GET['id'];
    $artikelnaam = $_POST['artikelnaam'];
    $soort = $_POST['soort'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];
    updateItem($id, $artikelnaam, $soort, $omschrijving, $prijs);

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Contact Us</title>
</head>

<body>

<div class="container">
    <h1 class="text-2xl px-2 pb-4">Product invoeren</h1>

    <form action="" method="POST" class="w-full max-w-lg ">
        <input type="hidden" name="artikelnummer" id="artikelnummer"  value="<?php echo $id;?>">
        <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-5 mb-2 md:mb-0">
        <label for="artikelnaam">Artikelnaam</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="artikelnaam" id="artikelnaam" class="gt-input"
        placeholder="<?php echo $artikelnaam; ?>">

      <div class="form-group">
        <label for="soort">Soort</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="soort" id="soort" class="gt-input"
        placeholder="<?php echo $soort; ?>">
      </div>

      <div class="form-group">
        <label for="omschrijving">Omschrijving</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="omschrijving" id="datum" class="gt-input"
        placeholder="<?php echo $omschrijving; ?>">
      </div>


      <div class="form-group">
        <label for="begintijd">Prijs</label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" name="prijs" id="prijs" class="gt-input"
        placeholder="<?php echo $prijs; ?>">
      </div>
</div>
</div>

 




      <?php if ($update ==true){ 
                echo '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-full" input name="btnUpdate" type="submit" class="gt-button">Product updaten</button>';
      }else{
        echo '<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded-full" input name="btnSubmit" type="submit" class="gt-button">Product invoeren</button>';
      }
      ?>

    <br>
    <br>
      
      <div class="form-status">
        

      </div>
    </form>
  </div>
  <br>
<?php
showList();

?>


</body>

</html>

