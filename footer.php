<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
        </div><!-- end .row -->
    </div><!-- end .container -->
</div><!-- end #body -->
</div><!-- end #pjax-container -->
<div id="go-top"><img no-lazyload src="<?php $this->options->themeUrl('assets/img/goTop.png'); ?>"><div id="scroll-percentage"></div></div>
<footer id="footer" role="contentinfo">
    <div>
        <?php $this->options->userFooter(); ?><p>&copy; <span><?php echo date('Y'); ?></span> <span><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.</span></p>
        <?php if(!empty($this->options->AriaConfig) && in_array('showHitokoto', $this->options->AriaConfig)): ?><p id="hitokoto"></p><?php endif; ?>
        <p id="footer-info"><span><a href="http://www.typecho.org" title="念念不忘，必有回响。">Typecho</a></span><span><a href="https://eriri.ink/Typecho-Theme-Aria.html" title="Typecho-Theme-Aria">Theme</a></span></p>
    </div>
</footer><!-- end #footer -->
</div><!-- end #wrapper -->
<script src="<?php $this->options->themeUrl('assets/js/nprogress.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/jquery.pjax.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/headroom.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/jquery.fancybox.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/highlight.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/jquery.lazyload.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('assets/OwO/OwO.min.js') ?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/main.min.js'); ?>"></script>
<?php if($this->options->statistics) $this->options->statistics(); ?>
<?php $this->footer(); ?>
</body>
</html>
