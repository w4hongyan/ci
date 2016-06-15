<?php
echo '<h4>'.$article_item['title'].'</h4>';
?>
<div class="row publishTime">
<div class="col-xs-12 col-sm-8 col-sm-offset-2">
发布时间:&nbsp;<?php echo date_format(date_create($article_item['createtime']),'Y-m-d');?>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-8 col-sm-offset-2">
<?php echo $article_item['content']; ?>
</div>
</div>
<script src="<?php echo base_url("/public/js/ueditor/third-party/SyntaxHighlighter/shCore.js"); ?>"></script>
<script type="text/javascript">
	 $(function(){
        SyntaxHighlighter.highlight();
    });
	 $(function () {
    // Line wrap back
    var shLineWrap = function () {
        $('.syntaxhighlighter').each(function () {
            // Fetch
            var $sh = $(this),
                $gutter = $sh.find('td.gutter'),
                $code = $sh.find('td.code')
                ;
            // Cycle through lines
            $gutter.children('.line').each(function (i) {
                // Fetch
                var $gutterLine = $(this),
                    $codeLine = $code.find('.line:nth-child(' + (i + 1) + ')')
                    ;
                //alert($gutterLine);
                // Fetch height
                var height = $codeLine.height() || 0;
                if (!height) {
                    height = 'auto';
                }
                else {
                    height = height += 'px';
                    //alert(height);
                }
                // Copy height over
                $gutterLine.attr('style', 'height: ' + height + ' !important'); // fix by Edi, for JQuery 1.7+ under Firefox 15.0
                console.debug($gutterLine.height(), height, $gutterLine.text(), $codeLine);
            });
        });
    };

    // Line wrap back when syntax highlighter has done it's stuff
    var shLineWrapWhenReady = function () {
        if ($('.syntaxhighlighter').length === 0) {
            setTimeout(shLineWrapWhenReady, 10);
        }
        else {
            shLineWrap();
        }
    };

    // Fire
    shLineWrapWhenReady();
});
</script>
