<?php
/* Copyright 2012 BrewPi/Elco Jacobs.
 * This file is part of BrewPi.

 * BrewPi is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * BrewPi is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with BrewPi.  If not, see <http://www.gnu.org/licenses/>.
 */
?>

<div id="top-bar" class="ui-widget ui-widget-header ui-corner-all">
	<div id="lcd" class="lcddisplay"><span class="lcd-text"><br>Live display<br>Waiting to update..</span></div>
	<div id="logo-container">
		<div class="logo-placeholder">
			<a href="http://forum.brewpi.com/discussion/6/we-need-a-logo">BrewPi Logo goes here</a>
		</div>
		<span id="beername">Fermenting: <?php echo $beerName;?></span>
	</div>
	<button class="script-status ui-state-error"></button>
	<button id="maintenance">Maintenance panel</button>
</div>
<div id="beer-chart" style="width:930px; height:400px;"></div>
<button id="refresh-beer-chart"></button>