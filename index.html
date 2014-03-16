<!DOCTYPE html>
<html manifest="mpd.manifest">
<head> <title>MPD::CMD</title> 

	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="js/themes/dominique.min.css" />
<!--link rel="stylesheet" href="js/jquery.mobile.theme-1.4.2.css" /-->
<link rel="stylesheet" href="js/jquery.mobile.structure-1.4.2.min.css" />
<link rel="stylesheet" href="js/jquery.mobile.icons-1.4.2.min.css" />

		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.mobile-1.4.2.min.js"></script>

	    <meta name="apple-mobile-web-app-capable" content="yes" />

<script>
var data;
function load(num)
{
$.ajax({ url: "run.php?cmd=play "+num});
refresh();
}

function run(cmd)
{
	$.get("run.php?cmd="+cmd);
	refresh();
}

var test;

function runC()
{
$("#command").val();
$("#cmd").html("load");
$.get("run.php?cmd="+$("#command").val(), function (d) { test= d; $("#cmd").html("");  $.each(test,function(i,v) { $('#cmd').append(i+":"+v+"\n"); }) } );

}


function refresh()
{
	$.get("run.php?cmd=command_list_begin%0aplaylist%0Astatus%0Acommand_list_end",function (d) { 
			data=d; $("#songtitle").html(d[d.song]);
			$("li").remove();
			for (a=0;a<data.playlistlength;a++) {
			
	if (a!=data.song) {
	$("ul").append($("<li/>").append($("<a/>",{'href':'javascript:load('+a+')','text':a+" : "+data[a],'class':'ui-btn',})));
	}
	else 
	{
	$("ul").append($("<li/>","{'class':'a'}").append($("<a/>",{'href':'javascript:load('+a+')','text':a+" "+data[a],'data-icon':'check','data-role':'button'})));

	}

	}
	$("ul").listview("refresh");


			})

}

onload.windows=refresh();
</script>

</head>
<body>
<div data-role="page" id="foo" data-theme="a">
	<div data-role="header" data-position='fixed'>

<div data-role="controlgroup"  data-type="horizontal"> 
<a href="javascript:refresh()" data-role="button" data-icon="refresh" data-iconpos="notext">Refresh</a>
<a href="javascript:run('play')" data-role="button" data-icon="arrow-r" data-iconpos="notext">Play</a>
<a href="javascript:run('stop')" data-role="button" data-icon="delete" data-iconpos="notext">stop</a>
<a href="javascript:run('next')" data-role="button" data-icon="plus" data-iconpos="notext">Next</a>

<div data-role="fieldcontain">
<input type="range" name="slider-3" id="slider-3" value="25" min="0" max="100" data-theme="a" data-track-theme="b" />
</div>
</div>

<a href="#bar" data-role="button" data-icon="gear" data-iconpos="notext" class="ui-btn-right" data-transition='flip'>Options</a>



	</div><!-- /header -->
	<div role="main" class="ui-content">
<ul data-role='listview' data-inset='true' data-filter='true'/>
	</div><!-- /content -->
	<div data-role="footer"  data-position="fixed">
	<p id='songtitle'>Playing: </p> 
	</div><!-- /footer -->
</div><!-- /page -->


<div data-role="page" id="bar" data-theme='b'>
	<div data-role="header" data-add-back-btn="true"> 
	<h1>Command</h1>
<div data-role="controlgroup"  data-type="horizontal">
</div>
</div><!-- /header -->
<div role="main" class="ui-content">

<input id=command onChange=javascript:runC()>
<pre id=cmd>
</pre>
</div><!-- /content -->

<div data-role="footer" data-position='fixed'>
</div><!-- /footer -->
</div><!-- /page -->
</body>
</html>
