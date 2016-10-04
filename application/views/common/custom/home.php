<!--
  @autor rogerio Lucio
  @ano 2016

-->


<!--
    monta uma div com os slides do menu
-->

<body>
<div id="all">
        <div id="content" style="margin-top:80px; margin-bottom:-29px; ">
            <div class="container" style="width:1220px;">
                <div class="col-md-12">
                    <div id="main-slider">
                    <?php
        foreach ($objetos as $row) {
      ?>    
                 <div class="item">
                            <img src="<?php echo base_url("imagem/" . $row["file"]) ?>" style="height:520px; width:100%;" alt="" class="img-responsive">
                 </div>
      <?php
             }
      ?>
                </div>
            </div>
        </div>
       </div>
</body>