          </div>
        </div>
      </main>
      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Sistem Informasi Kepegawaian</div>
        <strong><?php echo $credit; ?></strong>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>asset/adminlte/js/adminlte.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var sidebarWrapper = document.querySelector('.sidebar-wrapper');
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal !== 'undefined' && window.innerWidth > 992) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: { theme: 'os-theme-light', autoHide: 'leave', clickScroll: true }
          });
        }
      });
      $(document).ready(function () {
        $('.iframe-box-lg').colorbox({ iframe: true, width: '90%', height: '90%' });
        $('.iframe-box-sm').colorbox({ iframe: true, width: '900px', height: '90%' });
      });
    </script>
  </body>
</html>
