<?php if (!defined('footer_file')) {exit("Page Not Found!!!");} ?>

        </section><!-- end of content -->

</div><!-- end of content wrapper -->






<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.2
    </div>
    <strong>Copyright &copy; 2020-2021
        <a href="#">’Mohammed_Dev</a>.</strong> All rights
    reserved.
</footer>




</div><!-- end of wrapper -->

<script>

var elem = document.documentElement;

var btn = document.getElementById("btn");

btn.addEventListener("click", ()=>{

    if (btn.textContent == "Full Screen") {

            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }


        btn.textContent = "Exit FullScreen";
      
    }
    else
    {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) { /* Safari */
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) { /* IE11 */
            document.msExitFullscreen();
        }
        btn.textContent = "Full Screen"
    }

});



</script>



<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $js;?>bootstrap.min.js"></script>

<script src="<?php echo $plugin;?>icheck/icheck.min.js"></script>

<script src="<?php echo $js;?>fastclick.js"></script>

<script src="<?php echo $js;?>adminlte.min.js"></script>

<script src="<?php echo $plugin;?>ckeditor/ckeditor.js"></script>

<script src="<?php echo $js;?>jquery.number.min.js"></script>

<script src="<?php echo $js;?>printThis.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo $plugin;?>morris/morris.min.js"></script>

<script src="<?php echo $js;?>custom/image_preview.js"></script>
<script src="<?php echo $js;?>custom/order.js"></script>

<script>
    $(document).ready(function () {

        $('.sidebar-menu').tree();

        //icheck
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });

        

        // // image preview
        // $(".image").change(function () {
        //
        //     if (this.files && this.files[0]) {
        //         var reader = new FileReader();
        //
        //         reader.onload = function (e) {
        //             $('.image-preview').attr('src', e.target.result);
        //         }
        //
        //         reader.readAsDataURL(this.files[0]);
        //     }
        //
        // });

       

    });//end of ready
    
</script>

</body>
</html>
