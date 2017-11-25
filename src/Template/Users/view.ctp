<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users view large-9 medium-8 columns content">
    <div class="row">
        <div class="col-md-10 ">
        <div class="panel panel-default">
          <div class="panel-heading">  <h4 >Perfil de Usuario</h4></div>
           <div class="panel-body">
            <div class="box box-info">
                <div class="box-body">
                    <div class="col-sm-6">
                        <div  align="center">
                            <?= $this->Html->image('perfil.jpg', ['alt' => 'Foto de perfil', 'class'=>'img-circle img-responsive']) ?>
                            <input id="profile-image-upload" class="hidden" type="file">
                            <div style="color:#999;" >Haga click para cambiar la imagen</div>
                        <!--Upload Image Js And Css-->
                        </div>
                      <br>
                      <!-- /input-group -->
                    </div>
                    <div class="col-sm-6">
                        <h4 style="color:#00b1b1;"><?= h($user->name) ?></h4></span>
                        <span>
                            <?php if ($user->supervisor) { ?>
                                    <p>Supervisor</p>
                            <?php } else {?>
                                    <p>Veterinario</p>
                            <?php } ?>
                        </span>            
                    </div>
                    <div class="clearfix"></div>
                    <hr style="margin:5px 0 5px 0;">

                    <div class="col-sm-5 col-xs-6 tital " >Usuario:</div><div class="col-sm-7"><?= h($user->user_name) ?></div>
                      <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital " >ID:</div><div class="col-sm-7"><?= $this->Number->format($user->id) ?></div>
                      <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital " >Creado:</div><div class="col-sm-7"><?= h($user->created) ?></div>
                      <div class="clearfix"></div>
                    <div class="bot-border"></div>

                    <div class="col-sm-5 col-xs-6 tital " >Modificado:</div><div class="col-sm-7"><?= h($user->modified) ?></div>

                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
            </div> 
            </div>
        </div>  
    </div>
            
    
</div>
