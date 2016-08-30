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
						<h3>Dear, <?=$last_name ?></h3>
						<p class="lead">
								You have requested to reset your password. Please click on the link below to change your 
								password. <br/>
						<p class="callout">
						<a href="<?php echo PASSWORD_RESET_LINK;?>">Click it! &raquo;</a>
						</p><!-- /Callout Panel -->	
								If you do not wish to reset your password, please ignore this email 
						</p>
						<!-- Callout Panel -->
						
					</td>
				</tr>
			</table>
			</div><!-- /content -->
									
		</td>
		<td></td>
	</tr>
</table>

