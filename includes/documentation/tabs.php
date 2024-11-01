<?php
		$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'tab_1';
		if(isset($_GET['tab']))
			$active_tab = $_GET['tab'];
		?>
        
		<h2 class="nav-tab-wrapper clearfix">
			<a href="?page=urwa-documentation&amp;tab=tab_1" class="nav-tab <?php echo $active_tab == 'tab_1' ? 'nav-tab-active' : ''; ?>"><?php _e('Tutorial', 'urwa-documentation'); ?></a>
            <a href="?page=urwa-documentation&amp;tab=tab_2" class="nav-tab <?php echo $active_tab == 'tab_2' ? 'nav-tab-active' : ''; ?>"><?php _e('Additional Usage', 'urwa-documentation'); ?></a>
			<a href="?page=urwa-documentation&amp;tab=tab_3" class="nav-tab <?php echo $active_tab == 'tab_3' ? 'nav-tab-active' : ''; ?>"><?php _e('Advanced Styling', 'urwa-documentation'); ?></a>
			<a href="?page=urwa-documentation&amp;tab=tab_4" class="nav-tab <?php echo $active_tab == 'tab_4' ? 'nav-tab-active' : ''; ?>"><?php _e('Changelog', 'urwa-documentation'); ?></a>
            <a href="?page=urwa-documentation&amp;tab=tab_5" class="nav-tab <?php echo $active_tab == 'tab_5' ? 'nav-tab-active' : ''; ?>"><?php _e('Support', 'urwa-documentation'); ?></a>
		</h2>
		<br>
