<style>
.panel-polling{
width: 80%;
background: #C4E5EC  none repeat scroll 0% 0%;
color: #FFFFFF;
margin: 0% 10%;
}
.panel-kuisioner{
width: 80%;
background: #C4E5EC  none repeat scroll 0% 0%;
color: #FFFFFF;
margin: 0% 10%;
padding-bottom: 2%;
}
.kuisioner{
padding-top: 2%;
background: #0A6B8B none repeat scroll 0% 0%;
padding-bottom: 20px;
}
.soal{
background: #0A6B8B none repeat scroll 0% 0%;
border-bottom-width: 1px; border-bottom-style: solid;
}
.jawaban{
background: #0A6B8B none repeat scroll 0% 0%;
padding: 1% 5%;
}
.h3, h3.kuisioner{
font-size: 24px;
color: #FFFFFF;
font-weight: bold;
padding: 0%;
margin: 2% 0%;
}
p {
margin: 0px 0px 10px;
color: #FFFFFF;
font-size: 14px;
}
.p, p.pertanyaan  {
font-size: 14px;
color: #FFFFFF;
padding: 0% 3%;
margin-top: 10px;
margin-bottom: 0px;
}
</style>
<div id="content">
  <div class="panel-polling">
    <img src="<?php echo base_url() ?>assets/img/icon-pju.jpg" height="400px" width="100%" alt="">
  </div>
  <div class="panel-kuisioner">
    <div class="kuisioner">
      <div class="row">
        <div class="col-sm-12">

          <form method="POST" action="<?php echo base_url(); ?>polling/votepju">
            <div class="soal">
            <?php echo validation_errors();?>
              <p class="pertanyaan">
                1.  <?php if ($soal_pju->num_rows() > 0) {
                $soal = $soal_pju->row();
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                if ($jawaban->num_rows() > 0)
                {
                $jawab = $jawaban->row();
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_1" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_1" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_1" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_1" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="soal">
              <p class="pertanyaan">
                2. <?php $soal = $soal_pju->row(1);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(1);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_2" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_2" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_2" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_2" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="soal">
              <p class="pertanyaan">
                3. <?php $soal = $soal_pju->row(2);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(2);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_3" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_3" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_3" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_3" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="soal">
              <p class="pertanyaan">
                4. <?php $soal = $soal_pju->row(3);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(3);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_4" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_4" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_4" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_4" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="soal">
              <p class="pertanyaan">
                5. <?php $soal = $soal_pju->row(4);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(4);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_5" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_5" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_5" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_5" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="soal">
              <p class="pertanyaan">
                6. <?php $soal = $soal_pju->row(5);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(5);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_6" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_6" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_6" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_6" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="soal">
              <p class="pertanyaan">
                7. <?php $soal = $soal_pju->row(6);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(6);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_7" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_7" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_7" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_7" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="soal">
              <p class="pertanyaan">
                8. <?php $soal = $soal_pju->row(7);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(7);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_8" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_8" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_8" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_8" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="soal">
              <p class="pertanyaan">
                9. <?php $soal = $soal_pju->row(8);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(8);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_9" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_9" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_9" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_9" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="soal">
              <p class="pertanyaan">
                10. <?php $soal = $soal_pju->row(9);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(9);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_10" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_10" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_10" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_10" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="soal">
              <p class="pertanyaan">
                11. <?php $soal = $soal_pju->row(10);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(10);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_11" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_11" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_11" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_11" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="soal">
              <p class="pertanyaan">
                12. <?php $soal = $soal_pju->row(11);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(11);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_12" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_12" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_12" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_12" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="soal">
              <p class="pertanyaan">
                13. <?php $soal = $soal_pju->row(12);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(12);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_13" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_13" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_13" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_13" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="soal">
              <p class="pertanyaan">
                14. <?php $soal = $soal_pju->row(13);
                echo $soal->pertanyaan;
                ?>
              </p>
              
              <div class="jawaban">
                <?php
                $jawab = $jawaban->row(13);
                ?>
                <div class="row">
                  <div class="col-sm-3">
                    <input type="radio" name="no_14" value="1"><?php echo $jawab->jawaban_a; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_14" value="2"><?php echo $jawab->jawaban_b; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_14" value="3"><?php echo $jawab->jawaban_c; ?>
                  </div>
                  <div class="col-sm-3">
                    <input type="radio" name="no_14" value="4"><?php echo $jawab->jawaban_d; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="kuisioner">
              <center><h3 class="kuisioner">TERIMAKASIH ATAS PARTISIPASI ANDA</h3></center>
              
              
              <?php } ?>
              <?php } ?>
              
              
              <div class="row">
                
                <div class="col-xs-5"></div>
                <div class="col-xs-2">
                  <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
                  <input type="hidden" name="kategori" value="2">
                  <button type="submit" class="btn btn-warning" name="vote">SUBMIT</button>
                </div>
                <div class="col-xs-5"></div>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>		