<?php session_start()?>
<?php require 'database.php'; ?>
<?php include 'function.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="Webshop.png"/>

    <title>Webshop</title>
</head>
<body>
  
  
  
    <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">

        <div class="mb-2 sm:mb-0 flex flex-row
        ">
          <div class="h-10 w-10 self-center mr-5">
            <img class="h-10 w-10 self-center" src="Webshop.png" />
          </div>
          <div>
            <a href="index.php" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Logo</a><br>
            <span class="text-xs text-grey-dark">Webshop</span>
          </div>
        </div>
      
        <div class="sm:mb-0 self-center">
          <!-- <div class="h-10" style="display: table-cell, vertical-align: middle;"> -->
          <a href="index.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1">Buy</a>
          <a href="#" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">About</a>
          <!-- <a href="/two" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">About Us</a> -->
          <a href="#" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Contact</a>
          <!-- </div> -->
      
        </div>
      </nav>


    
    <section>
      <?php
      showItemsIndex();
      ?>

    </section>
    <script type="text/javascript">
  function reply_click(clicked_id)
  {
      alert(clicked_id);
  }
</script>
</body>
</html>
