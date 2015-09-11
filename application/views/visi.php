<div id="slide">
  <div id="carousel-generic" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-generic" data-slide-to="1"></li>
      <li data-target="#carousel-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <?php
        if ($listSlide->num_rows() > 0)
        {
        $row = $listSlide->row(0);
        }
        ?>
        <img src="<?php echo base_url('assets/img/slide/'.$row->image);?>" style="height:400px; width:100%" alt="...">
        <div class="carousel-caption">
          <h4><?php echo $row->title_slide ?></h4>
          <p><a class="btn btn-large btn-primary" href="#">Read More</a></p>
        </div>
      </div>
      <div class="item">
        <?php
        if ($listSlide->num_rows() > 0)
        {
        $row = $listSlide->row(1);
        }
        ?>
        <img src="<?php echo base_url('assets/img/slide/'.$row->image);?>" style="height:400px; width:100%" alt="...">
        <div class="carousel-caption">
          <h4><?php echo $row->title_slide ?></h4>
          <p><a class="btn btn-large btn-primary" href="#">Read More</a></p>
        </div>
      </div>
      <div class="item">
        <?php
        if ($listSlide->num_rows() > 0)
        {
        $row = $listSlide->row(2);
        }
        ?>
        <img src="<?php echo base_url('assets/img/slide/'.$row->image);?>" style="height:400px; width:100%" alt="...">
        <div class="carousel-caption">
          <h4><?php echo $row->title_slide ?></h4>
          <p><a class="btn btn-large btn-primary" href="#">Read More</a></p>
        </div>
      </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
  </div><!-- Carousel END -->
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img src="<?php echo base_url('assets/img/visi.jpg');?>" style="margin-bottom: 20px;" height="70px" width="100%">
          <div class="row">
            <div class="col-sm-12">
              <?php if ($listVisi->num_rows() > 0) {
                $row = $listVisi->row(0);
              ?>
              <?php echo $row->visi; ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>