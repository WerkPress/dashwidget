<?php 

$remove_defaults_widgets = array(
    'dashboard_incoming_links' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_right_now' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_recent_drafts' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_quick_press' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_plugins' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_primary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_secondary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_recent_comments' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    )
);

$custom_dashboard_widgets = array(
    'werkpress-dashboard-widget' => array(
        'title' => 'Werkpress Dashboard Widget',
        'callback' => 'werkpressDashboardWidgetContent'
    )
);

function werkpressDashboardWidgetContent() {
    ?>
	
	<form>
		
		<label for="name">Your name</label>
		<input type="text" name="name">
		
		<label for="company">Company name</label>
		<input type="text" name="company">
		
		<label for="email">Email</label>
		<input type="text" name="email">
		
		<label for="website">Your site</label>
		<input type="text" name="website">
		
		<label for="theme">What theme do you want modified?</label>
		<input type="text" name="theme">
		
		<label for="hosting">Your hosting provider</label>
		<input type="text" name="hosting">
		
		<label for="name">Your Name</label>
		<input type="text" name="name">
		
		<label for="changes">Describe desired changes</label>
		<textarea name="changes"></textarea>
		
		<label for="budget">What is your project budget?</label>
		<select name="name">
			<option>$0-500</option>
			<option>$1000-5000</option>
		</select>
		
		<input type="submit">
		
		
		
	</form>

	<?php
}