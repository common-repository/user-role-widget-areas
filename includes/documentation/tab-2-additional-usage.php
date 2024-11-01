
<div id="poststuff" class="ui-sortable meta-box-sortables clearfix">
			
				<h2>Using Shortcodes to Display Your Widget Areas</h2>
				<p>In addition to the supplied widgets I have added two shortcodes for displaying the new widget area content. These may be placed within a text widget or anywhere within your site content. <em>Note: Currently when using the shortcode to place the User Role & Status widget areas within the content area it displays the widget areas above your content. This is a know issue that I hope to have resolved in a future release.</em></p><br/>
                
                 <div class="postbox clearfix" style="padding:15px; padding-bottom:25px;">
					<div class="inside">
                    <p><b>The folllowing shortcode will display the ROLE based widget areas.</b></p>
                    <p style="font-size: 15px; color: #666;">[user-role-widget-areas]</p>
                    <p><b>The folllowing shortcode will display the STATUS based widget areas.</b></p>
					<p style="font-size: 15px; color: #666;">[user-status-widget-areas]</p>
					</div>
				</div><br/>
                
                 <h2>Hardcoding the Display Script Into Your Theme</h2>
				<p>If you wish you may also hard code the display of these widget areas directly in your theme files. To do this you simply have to hook the shortcodes above in the WordPress do_shortcode function. Although using the supplied widgets is the easiest method for displaying the widget areas, this option may be beneficial if you find that the activation widgets are being inadvertently removed by administrators.</p><br/>
                
                 <div class="postbox clearfix" style="padding:15px;">
					<div class="inside">
                    <p><b>The folllowing script will display the ROLE based widget areas when placed in your theme files (outside of the loop).</b></p>

<pre><code style="font-size: 15px; padding: 10px 0px; margin: 15px 0px; display: block; background-color: #fff !important;"><span style="color: #d62132;">&lt;?php </span><span style="color: green;">echo</span> do_shortcode <span style="color: blue;">(</span><span style="color: #d62132;">'[user-role-widget-areas]'</span><span style="color: blue;">)</span>; <span style="color: #d62132;">?&gt;</span></code></pre>

                    <p><b>The folllowing script will display the STATUS based widget areas when placed in your theme files (outside of the loop).</b></p>

<pre><code style="font-size: 15px; padding: 10px 0px; margin: 15px 0px; display: block; background-color: #fff !important;"><span style="color: #d62132;">&lt;?php </span><span style="color: green;">echo</span> do_shortcode <span style="color: blue;">(</span><span style="color: #d62132;">'[user-status-widget-areas]'</span><span style="color: blue;">)</span>; <span style="color: #d62132;">?&gt;</span></code></pre>

				</div>
                
			</div>
</div>