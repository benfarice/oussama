<div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- stats -->
        <div class="row">


        </div>
        <!--/ stats -->
        <!--/ project charts -->

        <section id="basic-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-card-center">Check Assessment</h4>
                  <a class="heading-elements-toggle">
                    <i class="icon-ellipsis font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="collapse">
                          <i class="icon-minus4"></i>
                        </a>
                      </li>
                      <li>
                        <a data-action="reload">
                          <i class="icon-reload"></i>
                        </a>
                      </li>
                      <li>
                        <a data-action="expand">
                          <i class="icon-expand2"></i>
                        </a>
                      </li>
                      <li>
                        <a data-action="close">
                          <i class="icon-cross2"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body collapse in">
                  <div class="card-block">
                    <div class="card-text">
                      <p></p>
                    </div>
                   
                          <label for="eventRegInput1">Student Name</label>
                          <hr>
                          <?php foreach($viewmodel as $item) : ?>
                         
                         <a href="<?php echo ROOT_URL; ?>/assessment/parent/<?php echo $item['student_id']; ?>" target="_blank">
                           <?php echo $item['name']; ?>
                         </a>
                          <br><br>
                          <?php endforeach; ?>

                      
                    </div>
                  </div>
                </div>


              </div>
            </div>
        </section>



       

        <div class="row">

        </div>
        <!--/ project charts -->

        <div class="row match-height">



        </div>

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2">
        <span class="float-md-left d-xs-block d-md-inline-block">Copyright &copy; 2018
          <a href="https://huobo.org" target="_blank" class="text-bold-800 grey darken-2">Huobo University </a>, All rights reserved. </span>
      </p>
    </footer>

</body>