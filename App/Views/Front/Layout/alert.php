<?php if (!empty($message)) { ?>
    
    <!-- Modal content -->
        <div class="flash-outer" id="id01">
            <?php if ($data["type"] == "success") { ?>
              <p class="flash-inner" style="color: green;">
                <span class="close" style="top: -20px;" id="id01" onclick="document.getElementById('id01').style.display='none'"> &times;</span>
                <img src="/Images/Body/alert.png" alt="Alert Image" style="width: 20px;"/> <?php echo $data["message"]; ?>
              </p>
            <?php } else { ?>
              <p class="flash-inner" style="color: red;">
                <span class="close" style="top: -20px;" id="id01" onclick="document.getElementById('id01').style.display='none'"> &times;</span>
                <img src="/Images/Body/alert.png" alt="Alert Image" style="width: 20px;"/> <?php echo $data["message"]; ?>
              </p>
            <?php } ?>
        </div>
    <!-- End Modal content -->
    
<?php } ?>
    
