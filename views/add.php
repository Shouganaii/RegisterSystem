
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <!--<a href="<?php BASE_URL?>"></a>-->
      </div>
    </div></li>
    <li> <a href="<?php BASE_URL;?>/crud_mvc/"><span class="black-text name">Logado como: <?php echo $name;?></span></a>   </li>
    <li><a href="<?php echo BASE_URL; ?>login/seeUsers">Ver usuários<i class="material-icons">account_box</i></a></li>
    <li><a href="<?php echo BASE_URL; ?>login/signup">Adicionar novo usuário<i class="material-icons">person_add</i></a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo BASE_URL; ?>login/logout">
           Sair
        </a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons medium">menu</i></a>
<div class="container"><h3>Novo registro de chamado</h3>

<form method="POST" action="<?php echo BASE_URL; ?>contatos/add_save">
        <div class="row">
            <div class="input-field col s6">
                 <input type="text" id="icon_prefix2" class="materialize-textarea" name="client">
                  <label for="icon_prefix2">Cliente atendido</label>
            </div>
            <div class="input-field col s6">
                 <input type="text" id="icon_prefix2" class="materialize-textarea" name="callType">
                  <label for="icon_prefix2">Tipo de chamado</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="problem"></textarea>
                <label for="textarea1">Problema do cliente</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="soluction"></textarea>
                <label for="textarea1">Solução</label>
            </div>
        </div>   
    <input type="hidden" value="<?php echo $id?>" name="id_user"> 
     
   
    <button class="waves-effect waves-light btn" type="submit" />Registrar</button>
            
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