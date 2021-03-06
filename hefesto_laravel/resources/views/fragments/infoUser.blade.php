<form id="infoUserForm">

	<div id="infoUserDialog" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">

		<div class="modal-content">
		  <div class="modal-header">			
			<h4 class="modal-title">infoUser.title</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>
		  <div class="modal-body">

			<table class="table table-bordered table-condensed">
				<tbody>
					<tr>
						<td style="font-weight: bold;">login.username</td>
						<td class="infoUser-username">userLogged.username</td>
					</tr>
					<tr>
						<td style="font-weight: bold;">infoUser.email</td>
						<td class="infoUser-email">userLogged.email</td>
					</tr>
					<tr>
						<td style="font-weight: bold;">infoUser.roles</td>
						<td class="infoUser-roles">userLogged.authorities</td>
					</tr>
				</tbody>
			</table>
		  
		  </div>
		</div>

	  </div>
	</div>

</form>
