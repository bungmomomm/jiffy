<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jPushMenu.js"></script>
<script src="js/v2p.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script src="js/bootstrap-slider.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
      //<![CDATA[
      $(document).ready(function(){
        $('.toggle-menu').jPushMenu({closeOnClickLink: false});
        $('.dropdown-toggle').dropdown();
      });
      //]]>
</script>
<script type="text/javascript">
jQuery(document).ready(function(){

	// Get items
	function getItems(exampleNr)
	{
		var columns = [];

		jQuery(exampleNr + ' ul.sortable-list').each(function(){
			columns.push(jQuery(this).sortable('toArray').join(','));				
		});

		return columns.join('|');
	}

	// Load items from cookie
	function loadItemsFromCookie(name)
	{
		if ( jQuery.cookie(name) != null )
		{
			renderItems(jQuery.cookie(name));
		}
		else 
		{
			alert('No items saved in "' + name + '".');
		}	
	}

	// Render items
	function renderItems(items)
	{
		var html = '';
	
		var columns = items.split('|');
		
		for ( var c in columns )
		{
			html += '<div class="column left';

			if ( c == 0 )
			{
				html += ' first';
			}

			html += '"><ul class="sortable-list">';

			if ( columns[c] != '' )
			{
				var items = columns[c].split(',');

				for ( var i in items )
				{
					html += '<li class="sortable-item" id="' + items[i] + '">Sortable item ' + items[i] + '</li>';
				}
			}

			html += '</ul></div>';
		}

		jQuery('#example-2-4-renderarea').html(html);
	}

	// Example 2.1: Get items
	jQuery('#dropbox-bundle .sortable-list').sortable({
		connectWith: '#dropbox-bundle .sortable-list'
	});

	jQuery('#btn-get').click(function(){
		alert(getItems('#dropbox-bundle'));
	});

	jQuery('#btn-load-cookie-a').click(function(){
		loadItemsFromCookie('cookie-a');	
	});

	jQuery('#btn-load-cookie-b').click(function(){
		loadItemsFromCookie('cookie-b');	
	});

});

</script>
<script type="text/javascript">
$(document).ready(function(){
    $('.popoverData').popover();
    $('.popoverOption').popover({ trigger: "hover" });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#accountModal').on('show', function() {
      	$('#accountModal').modal('hide')
    });
    $('#shipmentModal').on('hidden', function() {
      	$('#contactinfoModal').css('opacity', 1);
      	$('#contactinfoModal').removeData("modal").modal({});
    });
});
</script>


</body>
</html>