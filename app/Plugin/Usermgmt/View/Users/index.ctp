<?php
/*
	This file is part of UserMgmt.

	Author: Chetan Varshney (http://ektasoftwares.com)

	UserMgmt is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	UserMgmt is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php echo $this->element('admin_left');?>
<div class="form sites">
	<?php echo $this->Session->flash(); ?>
	<?php // echo $this->element('dashboard'); ?>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('All Users'); ?></span>
				<span class="umstyle2" style="float:right"><?php // echo $this->Html->link(__("Home",true),"/") ?></span>
				<div style="clear:both"></div>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<thead>
						<tr>
							<th><?php echo __('SL');?></th>
							<th><?php echo __('Name');?></th>
							<th><?php echo __('Username');?></th>
							<th><?php echo __('Email');?></th>
							<th><?php echo __('Group');?></th>
							<th><?php echo __('Email Verified');?></th>
							<th><?php echo __('Status');?></th>
							<th><?php echo __('Created');?></th>
							<th><?php echo __('Action');?></th>
						</tr>
					</thead>
					<tbody>
			<?php       if (!empty($users)) {
							$sl=0;
							foreach ($users as $row) {
								$sl++;
								echo "<tr>";
								echo "<td>".$sl."</td>";
								echo "<td>".h($row['User']['first_name'])." ".h($row['User']['last_name'])."</td>";
								echo "<td>".h($row['User']['username'])."</td>";
								echo "<td>".h($row['User']['email'])."</td>";
								echo "<td>".h($row['UserGroup']['name'])."</td>";
								echo "<td>";
								if ($row['User']['email_verified']==1) {
									echo "Yes";
								} else {
									echo "No";
								}
								echo"</td>";
								echo "<td>";
								if ($row['User']['active']==1) {
									echo "Active";
								} else {
									echo "Inactive";
								}
								echo"</td>";
								echo "<td>".date('d-M-Y',strtotime($row['User']['created']))."</td>";
								echo "<td nowrap>";
//									echo "<span class='icon'><a href='".$this->Html->url('/viewUser/'.$row['User']['id'])."'><img src='".SITE_URL."usermgmt/img/view.png' border='0' alt='View' title='View'></a></span>";
                                                                        
                                                                        echo "<span class='icon'><a href='".$this->Html->url('/viewUser/'.$row['User']['id'])."'>View</a></span>";
                                                                        
									echo "<span class='icon'><a href='".$this->Html->url('/editUser/'.$row['User']['id'])."'>Edit</a></span>";
									echo "<span class='icon'><a href='".$this->Html->url('/changeUserPassword/'.$row['User']['id'])."'>Change Password</a></span>";
									if ($row['User']['email_verified']==0) {
										echo "<span class='icon'><a href='".$this->Html->url('/usermgmt/users/verifyEmail/'.$row['User']['id'])."'>Verify Email</a></span>";
									}
									if ($row['User']['active']==0) {
										echo "<span class='icon'><a href='".$this->Html->url('/usermgmt/users/makeActiveInactive/'.$row['User']['id'].'/1')."'>Make Active</a></span>";
									} else {
										echo "<span class='icon'><a href='".$this->Html->url('/usermgmt/users/makeActiveInactive/'.$row['User']['id'].'/0')."'>Make Inactive</a></span>";
									}
									if ($row['User']['id']!=1 && $row['User']['username']!='Admin') {
										echo "<span class='icon'>".$this->Form->postLink('Delete', array('action' => 'deleteUser', $row['User']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete this user?')))."</span>";
									}
								echo "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan=10><br/><br/>No Data</td></tr>";
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>