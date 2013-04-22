<?php global $user; ?>
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<!-- ______________________ HEADER _______________________ -->
  <?php if ($main_menu || $secondary_menu): ?>
    <div id="nav-wrapper">
      <nav id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";} if (!empty($secondary_menu)) {print " with-secondary";} ?>">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
        <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
      </nav>
    </div> <!-- /nav-wrapper -->
    <?php endif; ?>
  <header id="header">
    <?php if ($site_name || $site_slogan): ?>
        <div id="logo">
        <?php if ($logo): ?>
          <img src="<?php print $logo; ?>" id="logo" alt="<?php print t('Home'); ?>"/>
        <?php endif; ?>
        </div>
      <div id="name-and-slogan">
        <?php if ($title): ?>
          <div id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
          </h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <div id="site-slogan">
            <h3><?php echo $site_slogan; ?></h3>
          </div>
        <?php endif; ?>
      </div> <!-- /name-and-slogan -->
    <?php endif; ?>
  </header> <!-- /header -->
  <div id="main" class="clearfix" role="main">
    <?php if (!empty($tabs['#primary'])): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php else: ?>
      <div id="no-tabs-shadow">
        <div id="content-tabs">
        <ul class="tabs primary">
          <li class="active">
            <?php if($user->uid): ?>
            <span class="active">VIEW</a>
            <?php else: ?>
            <span class="active">LOGIN</a>
            <?php endif; ?>
            <span class="element-invisible">(active tab)</span>
          </li>
        </ul>
        </div>
      </div>
      <?php endif; ?>
    <div id="content">
      <div id="content-inner" class="inner column center">
        <?php if ($page['content_top']): ?>
              <div id="content_top"><?php print render($page['content_top']) ?></div>
        <?php endif; ?>
        <?php if ($breadcrumb || $title|| $messages || $action_links): ?>
          <div id="content-header">
            <?php print $messages; ?>
            <?php print $breadcrumb; ?>
            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>
        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>
        <?php print $feed_icons; ?>
        <?php if ($page['content_bottom']): ?>
              <div id="content_bottom"><?php print render($page['content_bottom']) ?></div>
        <?php endif; ?>
      </div>
    </div> <!-- /content-inner /content -->
    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar first">
        <div id="sidebar-first-inner" class="inner">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </aside>
    <?php endif; ?> <!-- /sidebar-first -->
    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second" class="column sidebar second">
        <div id="sidebar-second-inner" class="inner">
          <?php print render($page['sidebar_second']); ?>
        </div>
      </aside>
    <?php endif; ?> <!-- /sidebar-second -->
  <!-- ______________________ FOOTER _______________________ -->
    <?php if ($page['footer']): ?>
      <footer id="footer">
        <?php print render($page['footer']); ?>
      </footer> <!-- /footer -->
    <?php endif; ?>
  </div> <!-- /main -->
</div> <!-- /page -->
