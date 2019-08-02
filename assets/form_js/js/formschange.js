$(function(){
    function pageLoad(){
        $('.date-picker').datepicker();

        $('.selectpicker').selectpicker();
        //selectpicker doesn't seem to be flexible enough (can't change template), so need to replace span.caret externally
        $('.selectpicker + .bootstrap-select span.caret').replaceWith("<i class='fa fa-caret-down'></i>");
        $('.selectpicker + .bootstrap-select span.pull-left').removeClass("pull-left");

        $("#phone, #fax").mask("(999) 999-9999");
        $("#publish-time").mask("99:99");

        //teach select2 to accept data-attributes
        $(".chzn-select").each(function(){
            $(this).select2($(this).data());
        });
        $("#article-tags").select2({
            tags: ['photoshop', 'colors', 'plugins', 'themes', 'bike']
        });

        //changing default parsley behaviour so it adds error messages to labels.
        //label - is a parent of element
        $("#user-form").parsley({
            errorsContainer: function ( parsleyField ) {
                return parsleyField.$element.parents(".control-group").children("label");
            }
        });

        $("input:checkbox").iCheck({
            checkboxClass: 'icheckbox_square-grey',
            radioClass: 'iradio_square-grey'
        });

        var customWysihtml5Templates = {
            "font-styles": function(locale) {
                return "<li class='dropdown'>" +
                    "<a class='btn btn-default btn-sm dropdown-toggle' data-toggle='dropdown' href='#'>" +
                    "<i class='fa fa-font'></i>&nbsp;<span class='current-font'>" + locale.font_styles.normal + "</span>&nbsp;&nbsp;<i class='fa fa-caret-down'></i>" +
                    "</a>" +
                    "<ul class='dropdown-menu'>" +
                    "<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='div'>" + locale.font_styles.normal + "</a></li>" +
                    "<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='p'>" + locale.font_styles.normal + "</a></li>" +
                    "<li><a data-wysihtml5-command='formatInline' data-wysihtml5-command-value='span'>" + locale.font_styles.normal + "</a></li>" +
                    "<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h1'>" + locale.font_styles.h1 + "</a></li>" +
                    "<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h2'>" + locale.font_styles.h2 + "</a></li>" +
                    "<li><a data-wysihtml5-command='formatBlock' data-wysihtml5-command-value='h3'>" + locale.font_styles.h3 + "</a></li>" +
                    "</ul>" +
                    "</li>"
            },
            "emphasis":  function(locale) {
                return "<li>" +
                    "<div class='btn-group'>"
                    + "<a class='btn btn-default btn-sm ' data-wysihtml5-command='bold' title='CTRL+B'><i class='fa fa-bold'></i></a>"
                    + "<a class='btn btn-default btn-sm ' data-wysihtml5-command='italic' title='CTRL+I'><i class='fa fa-italic'></i></a>"
                    //,+ "<a class='btn' data-wysihtml5-command='underline' title='CTRL+U'>Underline</a>"
                    + "</div>"
                    + "</li>"
            },
            "lists": function(locale) {
                return "<li>"
                    + "<div class='btn-group'>"
                    + "<a class='btn btn-default btn-sm ' data-wysihtml5-command='insertUnorderedList' title='" + locale.lists.unordered + "'><i class='fa fa-list'></i></a>"
                    + "<a class='btn btn-default btn-sm ' data-wysihtml5-command='insertOrderedList' title='" + locale.lists.ordered + "'><i class='fa fa-th-list'></i></a>"
                    + "<a class='btn btn-default btn-sm ' data-wysihtml5-command='Outdent' title='" + locale.lists.outdent + "'><i class='fa fa-outdent'></i></a>"
                    + "<a class='btn btn-default btn-sm ' data-wysihtml5-command='Indent' title='" + locale.lists.indent + "'><i class='fa fa-indent'></i></a>"
                    + "</div>"
                    + "</li>"
            },

            "link": function(locale) {
                return "<li>" +
                    "<div class='bootstrap-wysihtml5-insert-link-modal modal fade'>" +
                    "<div class='modal-dialog'>" +
                    "<div class='modal-content'>" +
                    "<div class='modal-header'>" +
                    "<a class='close' data-dismiss='modal'>&times;</a>" +
                    "<h3 class='modal-title'>" + locale.link.insert + "</h3>" +
                    "</div>" +
                    "<div class='modal-body'>" +
                    "<input value='http://' class='bootstrap-wysihtml5-insert-link-url form-control'>" +
                    "</div>" +
                    "<div class='modal-footer'>" +
                    "<a href='#' class='btn btn-default' data-dismiss='modal'>" + locale.link.cancel + "</a>" +
                    "<a href='#' class='btn btn-primary' data-dismiss='modal'>" + locale.link.insert + "</a>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "<a class='btn btn-default btn-sm' data-wysihtml5-command='createLink' title='" + locale.link.insert + "' tabindex='-1'><i class='fa fa-share'></i></a>" +
                    "</li>"
            },

            "image": function(locale) {
                return "<li>" +
                    "<div class='bootstrap-wysihtml5-insert-image-modal modal fade'>" +
                    "<div class='modal-dialog'>" +
                    "<div class='modal-content'>" +
                    "<div class='modal-header'>" +
                    "<a class='close' data-dismiss='modal'>&times;</a>" +
                    "<h3 class='modal-title'>" + locale.image.insert + "</h3>" +
                    "</div>" +
                    "<div class='modal-body'>" +
                    "<input value='http://' class='bootstrap-wysihtml5-insert-image-url form-control'>" +
                    "</div>" +
                    "<div class='modal-footer'>" +
                    "<a href='#' class='btn btn-default' data-dismiss='modal'>" + locale.image.cancel + "</a>" +
                    "<a href='#' class='btn btn-primary' data-dismiss='modal'>" + locale.image.insert + "</a>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +
                    "<a class='btn btn-default btn-sm' data-wysihtml5-command='insertImage' title='" + locale.image.insert + "' tabindex='-1'><i class='fa fa-picture-o'></i></a>" +
                    "</li>"
            },

            "html": function(locale) {
                return "<li>"
                    + "<div class='btn-group'>"
                    + "<a class='btn btn-default btn-sm ' data-wysihtml5-action='change_view' title='" + locale.html.edit + "'><i class='fa fa-pencil'></i></a>"
                    + "</div>"
                    + "</li>"
            }
        };
        $("#text").wysihtml5({
            html: true,
            customTemplates: customWysihtml5Templates,
            stylesheets: []
        });
    }

    pageLoad();
    PjaxApp.onPageLoad(pageLoad);
});

function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
 
    // Finally submit the form. 
    form.submit();
}
 
function regformhash(form, password, conf) {
     // Check each field has a value
    if (
          password.value == ''  || 
          conf.value == '') {
 
        alert('You must provide all the requested details. Please try again');
        return false;
    }
 
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.value.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.password.focus();
        return false;
    }
 
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
 
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Your password and confirmation do not match. Please try again');
        form.password.focus();
        return false;
    }
 
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";
 
    // Finally submit the form. 
    form.submit();
    return true;
}