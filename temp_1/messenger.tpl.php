<?php


?>
<head>
<style type="text/css">
    .col-md-4{
        margin:0!important;
        　width:30%!important;
          float:left!important;
        　height:100%!important;
        　text-align:center;
        　font-weight:bold;
          border:5px #FFAC55 solid!important;
        　
    }
    .col-md-8{

        float:right!important;
        　width:70%!important;
        　height:100%!important;
        　text-align:center;
        　font-weight:bold;
        border:5px black solid!important;
        padding:20px!important;　
        　
    }
    .a-group-messages{

        border:5px red solid!important;
        padding:10px!important;　
            　
    }
    .a-messages{

        border:5px black solid!important;
        padding:5px!important;　
            　
    }

</style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#falseinput').attr('src', e.target.result);
                    $('#base').val(e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
                <?php
                foreach ($messenger['#options'] as $k => $v){?>
                    <li class="list-item"
                        <?php
                            if($k==arg(1))
                                {echo 'style="font-weight:bold!important;" ';}
                        ?>
                    >
                        <a <?php echo 'href="'.$k.'"';?>>
                            <?php print_r($v['participants']);?>
                        </a>
                    </li>
                <?php } ?>
        </div>
        <div class="col-md-8">
            <?php foreach($messenger['#options'] as $k=> $v){?>
                <?php if(isset($v['messages_body'])){?>
                    <div class="a-group-messages">
                        <?php foreach($v['messages_body']['messages'] as $key => $value){?>
                            <div class="a-messages">
                                <?php echo $value->author->name.":".$value->body?>
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
            <?php }?>
            <input id="fileinput" type="file" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);" /> <br><br>
            <textarea id="base"></textarea>
        </div>
    </div>
</div>

<!--<div id="page-wrapper">-->
<!--    --><?php //var_dump($messenger);?>
<!--</div>-->
<!--<div id="kkk">-->
<!--    --><?php //print render($messenger);?>
<!--</div>>-->
