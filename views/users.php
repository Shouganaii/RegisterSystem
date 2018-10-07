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


<table border="1" width="100%">
	<tr>
		<th>Nome do usuário</th>
		<th>Ações</th>
	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
			<td><?php echo $item['username']; ?></td>
			<td>
                        <a href="<?php echo BASE_URL; ?>contatos/edit/<?php echo $item['id']; ?>">[ EDITAR ]</a>
                        <a href="<?php echo BASE_URL; ?>contatos/del/<?php echo $item['id']; ?>">[ EXCLUIR ]</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>