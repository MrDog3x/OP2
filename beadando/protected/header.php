<?php if(array_key_exists('uid', $_SESSION)&& is_numeric($_SESSION['uid'])): ?>
<p>Hello, <?=$_SESSION['uname']?></p>
<a href="<?=BASE_URL?><?=INDEX_PAGE?>?M=logout">Kijelentkezés</a>
<?php endif; ?>