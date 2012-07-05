  </div>
  <footer role="contentinfo">
	  
    <?php if ($footerText = get_theme_option('Footer Text')): ?>
    <div id="footer-text">
    <?php echo nls2p($footerText); ?>
    </div>
    <?php endif; ?>

    <nav>
      <ul class="navigation">
          <?php echo public_nav_main(array(__('Home') => uri(''), __('Browse Items') => uri('items'), __('Browse Neatlines') => uri('neatline-exhibits'))); ?>
      </ul>
    </nav>
    <?php plugin_footer(); ?>

  </footer>
</div>
</body>
</html>
