<?php include('./common/header.php'); ?>
<div class="ui grid">
    <div class="ui row">
        Hello world
    </div>

    <div class="ui basic modal">
  <div class="ui icon header">
    <i class="archive icon"></i>
    Archive Old Messages
  </div>
  <div class="content">
    <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
  </div>
  <div class="actions">
    <div class="ui red basic cancel inverted button">
      <i class="remove icon"></i>
      No
    </div>
    <div class="ui green ok inverted button">
      <i class="checkmark icon"></i>
      Yes
    </div>
  </div>
</div>
<script>
    $(document).ready(function () {
    $('#snapchat').on('click', function () {
        alert('click');
        $('.ui.basic.modal')
            .modal('show')
            ;
    });
});
    </script>
</div>
<?php include('./common/footer.php'); ?>