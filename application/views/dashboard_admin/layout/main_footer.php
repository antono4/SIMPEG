            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <?php echo $credit; ?>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="<?php echo base_url(); ?>asset/gentelella/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/gentelella/js/custom.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.iframe-box-lg').colorbox({ iframe: true, width: '90%', height: '90%' });
        $('.iframe-box-sm').colorbox({ iframe: true, width: '900px', height: '90%' });
      });
    </script>
  </body>
</html>
