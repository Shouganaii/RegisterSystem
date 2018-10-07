<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <!--<img src="<?php BASE_URL?>assets/images/sd.JPG">-->
      </div>
    </div></li>
    <li> <a href="<?php BASE_URL;?>/crud_mvc"><span class="black-text name">Logado como: <?php echo $name;?></span></a>   </li>
    <li><a href="<?php echo BASE_URL; ?>contatos/add"><i class="material-icons">add_circle</i>Novo chamado</a></li>
    <li><a href="<?php echo BASE_URL; ?>login/signup">Adicionar novo usuário<i class="material-icons">person_add</i></a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo BASE_URL; ?>login/logout">
           Sair
        </a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons medium ">menu</i></a>


<div class="container">
<table border="1" width="100%">
    <h3>Usuários</h3>
	<tr>
		<th>id</th>
		<th>Nome do Usuário</th>
		<th>Ações</th>

	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
                    
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['username']; ?></td>
                        <td><a class="waves-effect waves-light btn #d32f2f red darken-2" href="<?php echo BASE_URL; ?>contatos/delUser/<?php echo $item['id']; ?>">
                             EXCLUIR
                            </a>
                        </td>
		</tr>
	<?php endforeach; ?>
                
</table>
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