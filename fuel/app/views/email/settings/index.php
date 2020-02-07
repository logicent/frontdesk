<div class="row">
	<div class="col-md-6">
		<h2>Listing <span class='text-muted'>Email Settings</span></h2>
	</div>

	<div class="col-md-6">
		<br>
		<?= Html::anchor('email/settings/create', 'New', array('class' => 'btn btn-primary pull-right')); ?>
	</div>
</div>
<hr>

<?php if ($email_settings): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Smtp host</th>
			<th>Smtp username</th>
			<th>Smtp password</th>
			<th>Smtp port</th>
			<th>Smtp starttls</th>
			<th>Smtp timeout</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($email_settings as $item): ?>		<tr>

			<td>
                <?= Html::anchor('email/settings/edit/'.$item->id, $item->smtp_host,
                                array('class' => 'clickable')); ?>
            </td>
			<td><?php echo $item->smtp_username; ?></td>
			<td><?php echo $item->smtp_password; ?></td>
			<td><?php echo $item->smtp_port; ?></td>
			<td><?php echo $item->smtp_starttls; ?></td>
			<td><?php echo $item->smtp_timeout; ?></td>
			<td class="text-center">
				<?= Html::anchor('email/settings/delete/'.$item->id, '<i class="fa fa-trash-o fa-fw"></i>',
																array('class' => 'text-muted del-btn', 'onclick' => "return confirm('Are you sure?')")); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Email Settings.</p>
<?php endif; ?>
