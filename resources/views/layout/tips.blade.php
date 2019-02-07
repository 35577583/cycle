<style>
.nav-container {
}
.nav {
	display:flex;
	justify-content: space-between;
}
.item {
	padding-top:5px;
	display:flex;
	justify-content: space-around;
	width:100%;
}
.item a {
	padding:5px 10px;
	display:inline-block;
	border-top-right-radius:10px;
	border-top-left-radius:10px;
	color:white;
}
.item .selected {
	background-color:white;
	color:rgb(86, 86, 86);
}
</style>
<nav class="container-fluid nav-container">
	<div class="container nav">
		<div class="item">
	    	<a <?php if ($type == 'perosna') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/perosna">Persona</a>
	    	<a <?php if ($type == 'workflow') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/workflow">Workflow</a>
	    	<a <?php if ($type == 'driver') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/driver">Driver</a>
	    	<a <?php if ($type == 'need_seeking') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/need_seeking">Need Seeking</a>
	    	<a <?php if ($type == 'problem') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/problem">Problem</a>
	    	<a <?php if ($type == 'feature_generation') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/feature_generation">Feature Generation</a>
	    	<a <?php if ($type == 'implementation') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/implementation">Implementation</a>
	    	<a <?php if ($type == 'technology') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/technology">Technology Analysis</a>
	    	<a <?php if ($type == 'tracibility_matrix') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/tracibility_matrix">Tracibility Matrix</a>
	    	<a <?php if ($type == 'roadmap') { ?>class="selected"<?php } ?> href="/project/<?= $project['id']; ?>/roadmap">Technology Roadmap</a>
		</div>
	</div>
</nav>