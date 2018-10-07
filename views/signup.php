<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <!--<img src="<?php BASE_URL?>assets/images/sd.JPG">-->
      </div>
    </div></li>
    <li> <a href="<?php BASE_URL;?>/crud_mvc"><span class="black-text name">Logado como: <?php echo $name;?></span></a>   </li>
    <li><a href="<?php echo BASE_URL; ?>contatos/add"><i class="material-icons">add_circle</i>Novo chamado</a></li>
    <li><a href="<?php echo BASE_URL; ?>login/seeUsers">Ver usuários<i class="material-icons">account_box</i></a></li>
   
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo BASE_URL; ?>login/logout">
           Sair
        </a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons medium ">menu</i></a>   
<div class="container">
        <h4>Novo usuário</h4>

        <?php if(!empty($msg)): ?>
                <div class="warning">
                        <?php echo $msg; ?>
                </div>
        <?php endif; ?>

        <form method="POST">
                Usuário:<br/>
                <input type="text" name="username" /><br/><br/>

                Senha:<br/>
                <input type="password" name="pass" /><br/><br/>

                <button class="waves-effect waves-light btn" type="submit" />Cadastrar</button>
        </form>
</div>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>  
  <script type="text/javascript" >  
      $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  
  </script>

