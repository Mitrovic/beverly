jQuery( document ).ready(function() {
    //get the click of modal button to create / update item
    //we get the button by class not by ID because you can only have one id on a page and you can
    //have multiple classes therefore you can have multiple open modal buttons on a page all with or without
    //the same link.
//we use on so the dom element can be called again if they are nested, otherwise when we load the content once it kills the dom element and wont let you load anther modal on click without a page refresh
      jQuery(document).on('click', '.showModalButton', function(){
         //check if the modal is open. if it's open just reload content not whole modal
        //also this allows you to nest buttons inside of modals to reload the content it is in
        //the if else are intentionally separated instead of put into a function to get the
        //button since it is using a class not an #id so there are many of them and we need
        //to ensure we get the right button and content.
        if (jQuery('#modal').isShown) {
            jQuery('#modal').find('#modalContent')
                    .load(jQuery(this).attr('value'));
            //dynamiclly set the header for the modal
            document.getElementById('modalHeader').innerHTML = '<button title="Close dialog" onclick="jQuery(\'#modal\').modal(\'hide\');" type="button" class="btn btn-default pull-right btn-xs">×</button><h2 class="modal-title"><span id="modal_heading">' + jQuery(this).attr('title') + '</span></h2>';
        } else {
            //if modal isn't open; open it and load content
            jQuery('#modal').modal('show')
                    .find('#modalContent')
                    .load(jQuery(this).attr('value'));
             //dynamiclly set the header for the modal
            document.getElementById('modalHeader').innerHTML = '<button title="Close dialog" onclick="jQuery(\'#modal\').modal(\'hide\');" type="button" class="btn btn-default pull-right btn-xs">×</button><h2 class="modal-title"><span id="modal_heading">' + jQuery(this).attr('title') + '</span></h2>';
        }
    });
    jQuery(document).on('click', '.loadMainContent', function(){
             jQuery('#main-content').load(jQuery(this).attr('value'));
     });

});
jQuery(function(){
//load the current page with the conten indicated by 'value' attribute for a given button.

});
