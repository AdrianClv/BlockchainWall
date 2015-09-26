<?php
  require_once("../../resources/init.php");

  $pageTitle = "Blockchain Wall";
  require_once(TEMPLATES_PATH . "/header.php");
?>

<div class="container">
  <div class="card">
    <div class="card-header">
      Send Message
    </div>
    <div class="card-block">
      <form method="post" class="form-inline" action="message.php">
        <div class="input-group col-md-8 p-l-0">
          <input class="form-control" type="text" id="message" name="message" placeholder="Write your message here">
        </div>
        <button class="btn btn-secondary" type="submit">Send</button>
      </form>
      <span id="bytes">0</span> bytes (<span id="transactions">1</span> transactions)
    </div>
  </div>
</div>
<?php
  require_once(TEMPLATES_PATH . "/footer.php");
?>
<script>
// Visual counter of the number of bytes in #message
$('#message').keyup(function(e) {
  var bytes = getByteLen($('#message').val()); // Bytes of char pressed

  $('#bytes').text(bytes);
  $('#transactions').text(parseInt((bytes-1)/80)+1);
});
</script>
