<?
##########
# Welcome to VlexoFree Hosting!
# -----------------------------
# If you're reading this that means that that you're
# viewing the source of the default index file that
# is in your account. You'll notice that the content
# of the webpage as viewed in your web browser is not
# in this php file directly. The content is coming from
# http://vlexofree.com/welcome/ . This is done this way
# so that 1) the file can easily be edited if improvements
# can be made and 2) so redirects dont have to be. Note:
# YOU CAN DELETE THIS FILE.
# Enjoy your hosting! :)
##########

# Here is the line that makes this file work!
echo file_get_contents('http://vlexofree.com/welcome/');
?>