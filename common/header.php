<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="/common/base.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<br>
<?php require_once('./OverWatch.php');

$overWatch = new OverWatch;
$headerAndUrl = $overWatch->getHeaders();?>

<div class="ui huge header centered">Welcome To Mojahed's Site <i class="laptop icon"></i></div>
<div class="ui inverted segment">
  <div class="ui inverted secondary pointing menu">
    <?php foreach($headerAndUrl as $headerUrl) :?>
    
    <a class="item navbar" href="<?=$headerUrl['url']?>">
      <?=$headerUrl['header']?>
    </a>
<?php endforeach;?>
    <div class="right menu">
      <a class="ui item">
        Logout
      </a>
    </div>
  </div>
</div>
