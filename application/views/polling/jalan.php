<style>
#panel-polling`{
width: 100%;
background: #FFF;
position: center;
}
.panel-kuisioner{
width: 90%;
background: #C4E5EC  none repeat scroll 0% 0%;
margin-left: 5%;
color: #FFFFFF;
padding-bottom: 20px;
}
.kuisioner{
background: #0A6B8B none repeat scroll 0% 0%;
padding: 4%;
}
.h3, h3  {
font-size: 24px;
color: #096A8F;
font-weight: bold;
}
p {
margin: 0px 0px 10px;
color: #FFFFFF;
font-size: 14px;
}
</style>
<div id="panel-polling`">
  <div class="container">
    <div class="panel-kuisioner">
      <img src="<?php echo base_url() ?>assets/img/icon-jalan.jpg" height="400px" width="100%" alt="">
      <div class="kuisioner">
        <div class="row">
          <div class="col-sm-12">
            <form method="POST" action="<?php echo site_url(); ?>polling/votejalan/<?php echo $this->uri->segment(3)+1 ; ?>">
              <?php echo "<p>".$QuestionJalan['question']."</p>"; ?>
              <input type="hidden" name="question_id" value="<?php echo $QuestionJalan['question_id'] ?>">
              
              <?php foreach ($answer as $answer) {
              ?>
              <input type="radio" name="pilihan" id="<?php echo $answer->answer_id ?>" value="<?php echo $answer->answer_value ?>"> <?php echo $answer->answer ?><br>
              <?php } ?>
              <br>
              <div class="row">
                <div class="col-xs-1">
                  <button type="submit" class="btn btn-success btn-block" name="vote">Vote</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>