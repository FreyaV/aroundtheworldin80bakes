<?php
include 'lib/common2.php';
include 'lib/article_db2.php';
include 'lib/user_db2.php';
include 'header.php';
// questions for Michael - ok to use links as archive pages, or programme in FETCH articles with date perimieters?
// code below used if the blog admin wishes to archive their pages via urls. Another method would
// be to run fetch querys on the DB using date perimeters.
// Could consider adding this information as a side bar on the Home Page
?>
<html>
    <h2>Click on a link to search for a post<h2>
<h1>By Date</h1>
<ul style="list-style-type: none;">
<li><strong>2016</strong>:
<a href="http://localhost/templateblog/view2.php?id=2">Jan</a> |
<a href="http://localhost/templateblog/view2.php?id=1">Feb</a> |
<a href="http://localhost/templateblog/view2.php?id=3">Mar</a> |
<a href="http://localhost/templateblog/view2.php?id=4">Apr</a> |
<a href="http://localhost/templateblog/view2.php?id=2/">May</a> |
<a href="http://localhost/templateblog/view2.php?id=1/">Jun</a> |
<a href="http://localhost/templateblog/view2.php?id=3">Jul</a> |
<a href="http://localhost/templateblog/view2.php?id=4">Aug</a> |
<a href="http://localhost/templateblog/view2.php?id=2">Sep</a> |
<a href="http://localhost/templateblog/view2.php?id=1/">Oct</a> |
<a href="http://localhost/templateblog/view2.php?id=3">Nov</a> |
<a href="http://localhost/templateblog/view2.php?id=4">Dec</a></li>

<li><strong>2015</strong>:
Jan | Feb | Mar | Apr | May |
<a href="http://localhost/templateblog/view2.php?id=1/">Jun</a> |
<a href="http://localhost/templateblog/view2.php?id=2">Jul</a> |
<a href="http://localhost/templateblog/view2.php?id=3/">Aug</a> |
<a href="http://localhost/templateblog/view2.php?id=4">Sep</a> |
<a href="http://localhost/templateblog/view2.php?id=1">Oct</a> |
<a href="http://localhost/templateblog/view2.php?id=2">Nov</a> |
<a href="http://localhost/templateblog/view2.php?id=3">Dec</a></li>
</ul>

<div style="float: left; width: 45%;">
<h1>By Category <h2>(Bear with us while we design this very handy feature)</h2></h1>
<ul>

</ul>
</div>

<div style="float: left; width: 55%;">
<h1>By Tag <h2>(Likewise, there's a whole lot of building going on so that
 your experience of this website is quick and easy.)</h2></h1>
<div style="margin: 0 20px 0 20px;">

</div>
