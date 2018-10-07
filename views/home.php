<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <!--<img src="<?php BASE_URL?>assets/images/sd.JPG">-->
      </div>
    </div></li>
    <li> <a href="<?php BASE_URL;?>"><span class="black-text name">Logado como: <?php echo $name;?></span></a>   </li>
    <li><a href="<?php echo BASE_URL; ?>contatos/add"><i class="material-icons">add_circle</i>Novo chamado</a></li>
    <li><a href="<?php echo BASE_URL; ?>login/seeUsers">Ver usuários<i class="material-icons">account_box</i></a></li>
    <li><a href="<?php echo BASE_URL; ?>login/signup">Adicionar novo usuário<i class="material-icons">person_add</i></a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="<?php echo BASE_URL; ?>login/logout">
           Sair
        </a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons medium ">menu</i></a>
      
<div class="container">
<table border="1" width="100%" class="striped">
	<tr>
		<th>ID</th>
		<th>Funcionário</th>
		<th>Cliente</th>
		<th>Tipo de chamado</th>
		<th>Problema</th>
		<th>Solução</th>
                <th>Ações</th>
	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
                    
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['username']; ?></td>
                        <td><?php echo $item['client']; ?></td>
			<td><?php echo $item['callType']; ?></td>
			<td><?php echo $item['problem']; ?></td>
			<td><?php echo $item['soluction']; ?></td>
			
			<td>
				<a  class="waves-effect waves-light btn" href="<?php echo BASE_URL; ?>contatos/edit/<?php echo $item['id']; ?>"> EDITAR </a>
				<a  class="waves-effect waves-light btn #d32f2f red darken-2" href="<?php echo BASE_URL; ?>contatos/del/<?php echo $item['id']; ?>">EXCLUIR</a>
                                
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