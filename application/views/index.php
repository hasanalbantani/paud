<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?=SITE_NAME?></title>
     <link rel="stylesheet" href="<?=base_url()?>vendor/app.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
</head>
<body>
     <section class="wrapper">
          <header class="bg-theme">
               <nav>
                    <ul class="brand">
                         <li>
                              <a href=""><?=SITE_NAME?></a>
                         </li>
                    </ul>
                    <ul class="menu">
                         <?php 
                              foreach($data_publik as $key => $value){
                         ?>
                              <li>
                                   <a href=""><?=ucfirst($value->menu)?></a>
                              </li>
                         <?php } ?>
                    </ul>
               </nav>
          </header>
          <main>
               <div class="hero">
                    <?php
                         foreach($data_config as $key => $value){
                    ?>
                    <div class="caption">
                         <h1>
                              <?= $value->namasekolah?>
                         </h1>
                         <P>
                              <?= $value->visi?>
                         </P>
                    </div>
                    <?php } ?>
               </div>
               <div class="divider"></div>
               <div class="timeline">
                    <div class="container left">
                         <div class="content">
                              <h2>2017</h2>
                              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                         </div>
                    </div>
                    <div class="container right">
                         <div class="content">
                              <h2>2016</h2>
                              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                         </div>
                    </div>
                    <div class="container left">
                         <div class="content">
                              <h2>2015</h2>
                              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                         </div>
                    </div>
                    <div class="container right">
                         <div class="content">
                              <h2>2012</h2>
                              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                         </div>
                    </div>
                    <div class="container left">
                         <div class="content">
                              <h2>2011</h2>
                              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                         </div>
                    </div>
                    <div class="container right">
                         <div class="content">
                              <h2>2007</h2>
                              <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                         </div>
                    </div>
               </div>
               <div class="divider"></div>
               <div class="row">
                    <div class="card">
                         <img src="https://images.unsplash.com/photo-1586250127208-8218b38ff1cd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                         <div class="card-body">
                              <h4>Title</h4>
                              <p>
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quos voluptatem eveniet consequuntur voluptate distinctio. Nobis saepe tempore velit atque. Animi, numquam voluptatum vitae fugiat esse atque quibusdam officiis aperiam.
                              </p>
                         </div>
                    </div>
                    <div class="card">
                         <img src="https://images.unsplash.com/photo-1586250127208-8218b38ff1cd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                         <div class="card-body">
                              <h4>Title</h4>
                              <p>
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quos voluptatem eveniet consequuntur voluptate distinctio. Nobis saepe tempore velit atque. Animi, numquam voluptatum vitae fugiat esse atque quibusdam officiis aperiam.
                              </p>
                         </div>
                    </div>
                    <div class="card">
                         <img src="https://images.unsplash.com/photo-1586250127208-8218b38ff1cd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                         <div class="card-body">
                              <h4>Title</h4>
                              <p>
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quos voluptatem eveniet consequuntur voluptate distinctio. Nobis saepe tempore velit atque. Animi, numquam voluptatum vitae fugiat esse atque quibusdam officiis aperiam.
                              </p>
                         </div>
                    </div>
               </div>
          </main>
     </section>
     <footer class="bg-theme">
          &copy; <?=SITE_NAME .' <a href="https://masarrotulhuda.com/">'.SITE_NAME.'</a> '. date('Y')?> 
     </footer>
</body>
</html>