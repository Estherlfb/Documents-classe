<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap_test.css">
    <title>Document</title>
    <?php 
    $monTableau["Texte1"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nisi alias, iste deserunt exercitationem dignissimos dolore
    expedita dolorem facere voluptates ratione sequi cupiditate illum laborum minima officia totam natus unde.";

    $monTableau["Texte2"] = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nisi alias, iste deserunt exercitationem dignissimos dolore
                expedita dolorem facere voluptates ratione sequi cupiditate illum laborum minima officia totam natus unde."; 

    $monTableau["Texte3"] = " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, error saepe, fugit tempora totam facilis cupiditate, voluptatibus
     provident ea beatae accusamus hic. Neque quaerat fugit laborum alias sequi nostrum eius."; 

    $monTableau["Texte4"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat laboriosam quibusdam eaque quod ducimus. Quod delectus,
     voluptate consequatur minus quisquam iste. Unde rem nihil quia aliquid voluptate distinctio ipsum vel?"; 

    $monTableau["Texte5"] = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore magni dolorum, consectetur veniam rem ratione, dolores
     maxime blanditiis illum, recusandae assumenda iste ipsa minus delectus vitae cupiditate! Temporibus, numquam
     ex."; 

    $monTableau["Texte6"] = " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, minus recusandae facere cupiditate dolore sequi ipsa.
     Minus iure beatae eaque, quia assumenda voluptates nostrum labore, corporis iusto reiciendis officiis voluptatem!"; 

     $monTableau["Texte7"] = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non distinctio quis incidunt, necessitatibus placeat natus, quae
     minus similique nemo molestiae id? Doloremque quidem similique ab perferendis deleniti dolorem dolore esse?"; 

     $validation["valid"] = true;
     ?>
</head>

<body>
    <div class="container">
        <header class="row">
            <img src="logo.png" alt="" class="col-sm-4">
            <nav>
                <ul class="col-sm-8">
                    <li class="col-sm-2"> Menu 1 </li>
                    <li class="col-sm-2"> Menu 2 </li>
                    <li class="col-sm-2"> Menu 3 </li>
                </ul>
            </nav>
        </header>
        <img src="vans3.jpg" alt="" class="col-sm-12 image">
        <article class="row">
             <?php
                for($i = 0; $i < 2; $i++)     
            {
            ?>
            <div class="col-sm-6">
                <p> <?php
                        echo $monTableau["Texte5"];
            ?> </p>
            </div>        
            <?php         
                }
            ?> 
        </article>

       <!--  <div class="col-sm-6 row">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/kfzRXseSBIM" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
        </div>
        <div class="col-sm-6 row">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/MZ924VGx5n0" frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
        </div> -->

        <section>
            <div class="col-sm-12">
                <div  class="col-sm-6">
                    <img src="vans1.jpg" alt="">
                </div>
                <div  class="col-sm-6 vans2">
                    <img src="vans2.jpg" alt="">
                </div>
            </div>    
        </section>

        <aside class="row">
            <?php
                foreach($monTableau as $value)
            {      
            ?> 
            <div class="col-sm-4">
            <p> <?php    
                echo $value;
            ?> </p>
            </div>
            <?php 
            }
            ?> 



            <!-- <?php
                for($i = 0; $i < 3; $i++)     
            {
            ?>
            <div class="col-sm-4">
            <p> <?php
                    echo $monTableau["Texte5"];
            ?> </p>
            </div>        
            <?php         
                }
            ?> -->

        </aside>

        <footer class="row">
            <img src="vans4.jpeg" alt="" class="col-sm-12">
        </footer>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>