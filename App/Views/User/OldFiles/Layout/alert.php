<?php if (!empty($message)) { ?>
    
    <!-- Modal content -->
        <div class="modal-content short-dismissal" id="id01">
          <div class="modal-header">
            <p><img src="/Images/Body/alert.png" alt="Alert Image"/> <?= $data["type"]; ?> </p>
            <span class="close" id="id01" onclick="document.getElementById('id01').style.display='none'"> &times;</span>
          </div>
    
          <div class="modal-body">
            <?php if ($data["type"] == "success") { ?>
              <p style="color: green;"><?php echo $data["message"]; ?></p>
            <?php } else { ?>
              <p style="color: red;"><?php echo $data["message"]; ?></p>
            <?php } ?>
          </div>
        </div>
    <!-- End Modal content -->
    
<?php } ?>
    