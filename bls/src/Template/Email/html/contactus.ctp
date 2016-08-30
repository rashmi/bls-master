<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
		
?>
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<div class="content">
			<table>
				<tr>
					<td>
						<h3>Dear Admin, </h3>
						<p class="lead">
						<table cellpadding='10'>
						<tr>
							<td>Name:</td><td><?=@$template['name']?></td>
						</tr>
						<tr>
							<td>Email:</td><td><?=@$template['email']?></td>
						</tr>
						<tr>
							<td>Block No:</td><td><?=@$template['block_no']?></td>
						</tr>
						<tr>
							<td>Unit No</td><td><?=@$template['unit_no']?></td>
						</tr>
						<tr>
							<td>Street</td><td><?=@$template['street']?></td>
						</tr>
						<tr>
							<td>Country</td><td><?=@$template['country']?></td>
						</tr>
						<tr>
							<td>Postal Code</td><td><?=@$template['postal_code']?></td>
						</tr>
						<tr>
							<td>Telephone No</td><td><?=@$template['telephone_no']?></td>
						</tr>
						<tr>
							<td>Fax No</td><td><?=@$template['fax_no']?></td>
						</tr>
						<tr>
							<td>Website</td><td><?=@$template['website']?></td>
						</tr>
						<tr>
							<td valign='top'>Message Details</td><td><?=@$template['yourmessage']?></td>
						</tr>
						</table>
						<br/></p>
						<!-- Callout Panel -->
						
					</td>
				</tr>
			</table>
			</div><!-- /content -->
									
		</td>
		<td></td>
	</tr>
</table>

