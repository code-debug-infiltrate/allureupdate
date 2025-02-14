<?php if (!empty($message)) { ?>
    <div class="alert alert-light bg-light text-light border-0 alert-dismissible fade show" role="alert">
        <p id="data" class="<?php echo $data["type"]; ?>" style="font-size: 14px; font-weight: lighter;">
            <?php echo $data["message"]; ?>
        </p>
        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
                