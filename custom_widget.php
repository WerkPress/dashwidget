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
        'title' => 'Werkpress Customization Request',
        'callback' => 'werkpressDashboardWidgetContent'
    )
);

function werkpressDashboardWidgetContent() {
    ?>
	<h1>
		<?php
			echo '<img src="' . plugins_url( 'assets/logo.png' , __FILE__ ) . '" alt="Werkpress"> ';
		?>
	</h1>
	<form id="ww_form">
		<ul>
			<li>
				<label for="name">Your name</label><br/>
				<input type="text" name="name">
			</li>
			<li>	
				<label for="company">Company name</label><br/>
				<input type="text" name="company">
			</li>	
			<li>
				<label for="email">Email</label><br/>
				<input type="text" name="email">
			</li>	
			<li>	
				<label for="website">Your site</label><br/>
				<input type="text" name="website">
			</li>
			<li>	
				<label for="theme">What theme do you want modified?</label><br/>
				<input type="text" name="theme">
			</li>
			<li>	
				<label for="hosting">Your hosting provider</label><br/>
				<input type="text" name="hosting">
			</li>
			<li>	
				<label for="name">Your Name</label><br/>
				<input type="text" name="name">
			</li>
			<li id="ww_textarea">	
				<label for="changes">Describe desired changes</label><br/>
				<textarea name="changes"></textarea>
			</li>	
			<li>
				<label for="budget">What is your project budget?</label><br/>
				<select name="name">
					<option value="">Select a budget</option>
					<option value="Less than 500">&#60; $500</option>
					<option value="Between 500 and 1000">$500 - 1000</option>
					<option value="Between 1000 and 2000">$1000 - 2000</option>
					<option value="Between 2000 and 5000">$2000 - 5000</option>
					<option value="Between 5000 and 10000">$5000 - 10000</option>
					<option value="Greater than 10000">&#62; 10000</option>
				</select>
			</li>
			<li id="ww_submit">	
				<input type="submit" value="Request Customization">
			</li>
		<ul>
		
		
	</form>

	<?php
}