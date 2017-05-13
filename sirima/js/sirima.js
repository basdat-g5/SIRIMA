/**
 * Created by ArriKurniawan on 5/13/2017.
 */

var sirima = sirima || {};

sirima.Elements = {
    $w: $(window)
    , $d: $(document)
    , $b: null
};

sirima.Constants = {
    AjaxStatus: {
        SUCCESS: "success"
        , ERROR: "error"
        , CONFIRM: "confirm"
    }
};

sirima.Components = {
    /*
     $elements: The table element that contains checkboxes
     $button: Button to active if there is any checkbox selected
     opts: Other options
     */

    CheckBox: function ($elements, $button, opts) {
        if (!$elements || ($elements.length == 0)) return;

        $elements.find("input[type='checkbox']").each(function (i, element) {
            $(this).on('change', function (e) {
                if (isButtonAvailable($button)) {
                    if (isAnyCheckBoxSelected($elements)) {
                        $button.removeAttr('disabled');
                    }
                    else {
                        $button.attr('disabled', 'disabled');
                    }
                }
            });
        });

        function isAnyCheckBoxSelected($element) {
            var returnValue = false;
            $elements.find("input[type='checkbox']").each(function (i, element) {
                if ($(this).is(":checked")) {
                    returnValue = true;
                }
            });
            return returnValue;
        }

        function isButtonAvailable($button) {
            if (!$button || ($button.length == 0)) {
                return false;
            }
            else {
                return true;
            }
        }
    }

    /*
     $elements: The table element that contains checkboxes
     $button: Button to select all checkbox 
     */
    , SelectAllCheckBox: function ($elements, $button) {
        $button.on('click', function (e) {
            if ($button.is(":checked")) {
                return $elements.prop('checked', true);
            } else {
                return $elements.prop('checked', false);
            }
        });
    }

    /*
     Close button and go to default page.
     $elements: The close button element.
     opts: Other options
     - Message: Close message
     - Url: The URL to redirect
     */
    , CloseButton: function ($element, opts) {
        if (!$element || ($element.length == 0)) return;

        var defaults = {
            message: "Are you sure want to close and go back to home page?"
            , url: "Home"
        };

        var settings = $.extend({}, defaults, opts);
        $element.on('click', function (event) {
            bootbox.confirm(settings.message, function (result) {
                if (result == true)
                    window.location = settings.url;
            });
        });
    }

    /*
     Select element in html,
     Contain functions to check or update select component.
     */
    , Select: {
        /*
         update the options in the select element HTML.
         $element: The select html element.
         option_list: The array of options, contains value and text on its object.
         e.g. [{value: "f", text: "First Option"}]
         remove_first_item: If true, the first option will be removed.
         */
        UpdateOptions: function ($element, option_list, remove_first_item) {
            if (!$element || ($element.length == 0)) return;

            var option_query = "option:gt(0)";
            if (remove_first_item) {
                option_query = "option";
            }

            $element.find(option_query).each(function () {
                $(this).remove();
            });

            $.each(option_list, function (k, v) {
                $element.append($("<option></option>")
                    .attr("value", v.value)
                    .text(v.text));
            });
        }

        /*
         Remove options in the select element HTML.
         $element: The select html element.
         remove_first_item: If true, the first options will be removed.
         */
        , RemoveOptions: function ($element, remove_first_item) {
            if (!$element || ($element.length == 0)) return;

            var option_query = "option:gt(0)";
            if (remove_first_item) {
                option_query = "option";
            }

            $element.find(option_query).each(function () {
                $(this).remove();
            });
        }
    }

    /*
     Input Text element in html,
     Contain functions to check or update select component.
     */
    , InputText: {
        /*
         update the value in the input text element HTML.
         $element: The input text html element.
         value: The value of input text.
         */
        UpdateValue: function ($element, value) {
            if (!$element || ($element.length == 0)) return;

            $element.attr("value", value);
        }
    }

    /*
     Loading screen componet. Display loading modal dialog.
     */
    , LoadingScreen: {
        /*
         Open our dialog
         @param message Custom message
         @param options Custom options:
         options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
         options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
         */
        Show: function (message, options) {
            WaitingDialog.show(message, options);
            //sirima.Element.$b.removeClass('modal-open');
        }

        //Close dialog
        , Hide: function () {
            WaitingDialog.hide();
            sirima.Components.LoadingScreen.UpdateProgressBar();
        }

        //Update the progress bar.
        , UpdateProgressBar: function (progress) {
            if (progress && progress <= 100 && progress >= 0) {
                sirima.Elements.$b.find(".modal-dialog").find(".progress-bar").css("width", (progress + "%"));
            }
            else {
                sirima.Elements.$b.find(".modal-dialog").find(".progress-bar").css("width", ("100%"));
            }
        }
    }

    , LoadingHyperlink: function ($elements) {
        if (!$elements || ($elements.length == 0)) return;

        $elements.on('click', function (event) {
            var message = "Loading <b>" + $(this).text() + "</b>. <br/><br/>Please wait...";
            sirima.Components.LoadingScreen.Show(message);
            window.location = $(this).attr('href');
        });
    }

    /* Function get message */
    /* Begin */
    , GetMessage: {
        info: function (popupTitle, messageID, messageParam, isReload) {
            var url = 'Standards/Message';
            $.ajax({
                type: "POST",
                dataType: "json",
                contentType: 'application/json; charset=utf-8',
                traditional: true,
                url: url,
                data: JSON.stringify({
                    msgID: messageID,
                    msgParam: messageParam
                }),
                success: function (result) {
                    bootbox.dialog({
                        title: '<div class="close" style="opacity: 1 !important; margin-top: -7px;"><span aria-hidden="true"><img src="Content/Bootstrap/img/information.png" class="modal-icon" /></span></div><h4 class="modal-title" id="popup-title">' + popupTitle + '</h4>',
                        message: result,
                        closeButton: false,
                        buttons: {
                            main: {
                                label: "OK",
                                className: "btn-primary",
                                callback: function () {
                                    sirima.Components.GetMessage.isReloaded(isReload);
                                }
                            }
                        }
                    });
                }
            });
        }

        , warning: function (popupTitle, messageID, messageParam, isReload) {
            var url = 'Standards/Message';
            $.ajax({
                type: "POST",
                dataType: "json",
                contentType: 'application/json; charset=utf-8',
                traditional: true,
                url: url,
                data: JSON.stringify({
                    msgID: messageID,
                    msgParam: messageParam
                }),
                success: function (result) {
                    bootbox.dialog({
                        title: '<div class="close" style="opacity: 1 !important; margin-top: -7px;"><span aria-hidden="true"><img src="Content/Bootstrap/img/Warning.png" class="modal-icon" /></span></div><h4 class="modal-title" id="popup-title">' + popupTitle + '</h4>',
                        message: result,
                        closeButton: false,
                        buttons: {
                            main: {
                                label: "OK",
                                className: "btn-primary",
                                callback: function () {
                                    sirima.Components.GetMessage.isReloaded(isReload);
                                }
                            }
                        }
                    });
                }
            });
        }

        , confirm: function (popupTitle, messageID, messageParam, isReload, funcCallback, paramFunc) {
            var url = 'Standards/Message';
            $.ajax({
                type: "POST",
                dataType: "json",
                contentType: 'application/json; charset=utf-8',
                traditional: true,
                url: url,
                data: JSON.stringify({
                    msgID: messageID,
                    msgParam: messageParam
                }),
                success: function (result) {
                    bootbox.dialog({
                        title: '<div class="close" style="opacity: 1 !important; margin-top: -7px;"><span aria-hidden="true"><img src="Content/Bootstrap/img/question.png" class="modal-icon" /></span></div><h4 class="modal-title" id="popup-title">' + popupTitle + '</h4>',
                        message: result,
                        closeButton: false,
                        buttons: {
                            success: {
                                label: "Yes",
                                className: "btn-success",
                                callback: function () {
                                    return funcCallback(paramFunc);
                                }
                            },
                            danger: {
                                label: "No",
                                className: "btn-danger",
                                callback: function () {
                                    sirima.Components.GetMessage.isReloaded(isReload);
                                }
                            }
                        }
                    });
                }
            });
        }

        , renewalConfirmExistResult: function (popupTitle, messageID, messageParam, isReload, funcCallback, paramFunc, link) {
            var url = 'Standards/Message';
            $.ajax({
                type: "POST",
                dataType: "json",
                contentType: 'application/json; charset=utf-8',
                traditional: true,
                url: url,
                data: JSON.stringify({
                    msgID: messageID,
                    msgParam: messageParam
                }),
                success: function (result) {
                    bootbox.dialog({
                        title: '<div class="close" style="opacity: 1 !important; margin-top: -7px;"><span aria-hidden="true"><img src="Content/Bootstrap/img/information.png" class="modal-icon" /></span></div><h4 class="modal-title" id="popup-title">' + popupTitle + '</h4>',
                        message: result,
                        closeButton: false,
                        buttons: {
                            success: {
                                label: "Proceed to Law Station",
                                className: "btn-success",
                                callback: function () {
                                    return funcCallback(paramFunc, "LAW STATION", link);
                                    //return window.location.href = funcCallback;
                                }
                            },
                            danger: {
                                label: "Cancel",
                                className: "btn-info",
                                callback: function () {
                                    sirima.Components.GetMessage.isReloaded(isReload);
                                }
                            }
                        }
                    });
                }
            });
        }

        , renewalConfirmNotExistResult: function (popupTitle, messageID, messageParam, isReload, funcCallback, paramFunc, link) {
            var url = 'Standards/Message';
            $.ajax({
                type: "POST",
                dataType: "json",
                contentType: 'application/json; charset=utf-8',
                traditional: true,
                url: url,
                data: JSON.stringify({
                    msgID: messageID,
                    msgParam: messageParam
                }),
                success: function (result) {
                    bootbox.dialog({
                        title: '<div class="close" style="opacity: 1 !important; margin-top: -7px;"><span aria-hidden="true"><img src="Content/Bootstrap/img/Warning.png" class="modal-icon" /></span></div><h4 class="modal-title" id="popup-title">' + popupTitle + '</h4>',
                        message: result,
                        closeButton: false,
                        buttons: {
                            proceed: {
                                label: "Do Renewal in sirima",
                                className: "btn-success",
                                callback: function () {
                                    return funcCallback(paramFunc, "sirima", link);
                                }
                            },
                            success: {
                                label: "Proceed to Law Station",
                                className: "btn-success",
                                callback: function () {
                                    return funcCallback(paramFunc, "LAW STATION", link);
                                }
                            },
                            danger: {
                                label: "Cancel",
                                className: "btn-info",
                                callback: function () {
                                    sirima.Components.GetMessage.isReloaded(isReload);
                                }
                            }
                        }
                    });
                }
            });
        }

        , logout: function (popupTitle, messageID, messageParam, isReload, funcCallback, paramFunc) {
            var url = 'Standards/Message';
            $.ajax({
                type: "POST",
                dataType: "json",
                contentType: 'application/json; charset=utf-8',
                traditional: true,
                url: url,
                data: JSON.stringify({
                    msgID: messageID,
                    msgParam: messageParam
                }),
                success: function (result) {
                    bootbox.dialog({
                        title: '<div class="close" style="opacity: 1 !important; margin-top: -7px;"><span aria-hidden="true"><img src="Content/Bootstrap/img/question.png" class="modal-icon" /></span></div><h4 class="modal-title" id="popup-title">' + popupTitle + '</h4>',
                        message: result,
                        closeButton: false,
                        buttons: {
                            success: {
                                label: "No",
                                className: "btn-danger",
                                callback: function () {
                                    sirima.Components.GetMessage.isReloaded(isReload);
                                }
                            },
                            danger: {
                                label: "Yes",
                                className: "btn-success",
                                callback: function () {
                                    window.location.assign(funcCallback);
                                }
                            }
                        }
                    });
                }
            });
        }

        , isReloaded: function(action) {
            if (action) {
                window.location.reload();
            }
        }
    }
    /* End */

    /* Function AttachmentFiles */
    /* Begin */
    , AttachmentFiles: {
        AddLinks: function (data, HTMLElement_ID, DownloadUrl, isAuthorized) {
            var attachmentLinks = "";
            var attachmentFilesCounted = data.length;
            $.each(data, function (index, element) {
                if (attachmentFilesCounted > 1) {
                    if (isAuthorized == "True") {
                        attachmentLinks = attachmentLinks + "<a href='javascript: " + DownloadUrl + "(\"" + element.doc_name + "\",\"" + element.doc_id + "\");'>" + element.doc_name + "</a>" + (index == attachmentFilesCounted - 1 ? "" : "<br /> ");
                    }
                    else {
                        attachmentLinks = attachmentLinks + element.doc_name + (index == attachmentFilesCounted - 1 ? "" : "<br /> ");
                    }
                }
                else {
                    if (isAuthorized == "True") {
                        attachmentLinks = "<a href='javascript: " + DownloadUrl + "(\"" + element.doc_name + "\",\"" + element.doc_id + "\");'>" + element.doc_name + "</a>";
                    }
                    else {
                        attachmentLinks = attachmentLinks + element.doc_name + (index == attachmentFilesCounted - 1 ? "" : ", ");
                    }
                }
            });
            $(HTMLElement_ID).html(attachmentLinks);
        }

        , EditLinks: function (data, HTMLElement_ID, DownloadUrl) {
            var attachmentLinks = "";
            var attachmentFilesCounted = data.length;
            $.each(data, function (index, element) {
                if (attachmentFilesCounted > 1) {
                    attachmentLinks = attachmentLinks + "<div class='row' style='padding: 3px;'><span class='col-md-9 spanVal' id='valLink'><a style='word-wrap: break-word' href='javascript: "
                        + DownloadUrl + "(\"" + element.doc_name + "\",\"" + element.doc_id + "\");'>" + element.doc_name + "</a><input id='doc_seq' class='doc_seq' type='hidden' value=" + element.doc_seq + ">"
                        + "<input id='doc_id' class='doc_id' type='hidden' value=" + element.doc_id + "></span>"
                        + "<input type='button' class='col-md-1 btn btn-xs btn-yellow btnUpdateFile text-center fa' id='btnUpdateFile' title='Update file'"
                        + "value='&#xf040;' /><input type='button' class='col-md-2 btn btn-xs btn-danger btnCUpdateFile text-center fa' id='btnCUpdateFile' title='Update file'"
                        + "value='&#xf00d;' style='display: none' />"
                        + "<input type='button' class='col-md-1 btn btn-xs btn-danger btnDeleteFile text-center fa' id='btnDeleteFile' title='Remove file'"
                        + "value='&#xf1f8;' /></div>";
                }
                else {
                    attachmentLinks = "<div class='row' style='padding: 3px;'><span class='col-md-9 spanVal' id='valLink'><a style='word-wrap: break-word' href='javascript: "
                        + DownloadUrl + "(\"" + element.doc_name + "\",\"" + element.doc_id + "\");'>" + element.doc_name + "</a><input id='doc_seq' type='hidden' value=" + element.doc_seq + ">"
                        + "<input id='doc_id' type='hidden' value=" + element.doc_id + "></span>"
                        + "<input type='button' class='col-md-1 btn btn-xs btn-yellow btnUpdateFile text-center fa' id='btnUpdateFile' title='Update file'"
                        + "value='&#xf040;' /><input type='button' class='col-md-2 btn btn-xs btn-danger btnCUpdateFile text-center fa' id='btnCUpdateFile' title='Update file'"
                        + "value='&#xf00d;' style='display: none' />"
                        + "<input type='button' class='col-md-1 btn btn-xs btn-danger btnDeleteFile text-center fa' id='btnDeleteFile' title='Remove file'"
                        + "value='&#xf1f8;' /></div>";
                }
            });
            attachmentLinks = attachmentLinks + "<div class='col-md-9' style='margin-left:-12px;'><input type='button' id='btnAddFile' title='Add file'"
                + "class='col-md-8 btn btn-xs btn-primary btnAddFile text-center' value='+ Add New' /></div>";
            $(HTMLElement_ID).html(attachmentLinks);
        }

        , EditAgreementLinks: function (data, HTMLElement_ID, DownloadUrl) {
            var attachmentLinks = "";
            var attachmentFilesCounted = data.length;
            $.each(data, function (index, element) {
                if (attachmentFilesCounted > 1) {
                    attachmentLinks = attachmentLinks + "<div class='row' style='padding: 3px;'><span class='col-md-9 spanVal' id='valLink'><a style='word-wrap: break-word' href='javascript: "
                        + DownloadUrl + "(\"" + element.doc_name + "\",\"" + element.doc_id + "\");'>" + element.doc_name + "</a><input id='doc_seq' class='doc_seq' type='hidden' value=" + element.doc_seq + ">"
                        + "<input id='Agreementdoc_id' class='Agreementdoc_id' type='hidden' value=" + element.doc_id + "></span>"
                        + "<input type='button' class='col-md-1 btn btn-xs btn-yellow btnUpdateAgrFile text-center fa' id='btnUpdateAgrFile' title='Update file'"
                        + "value='&#xf040;' /><input type='button' class='col-md-2 btn btn-xs btn-danger btnCUpdateAgrFile text-center fa' id='btnCUpdateAgrFile' title='Update file'"
                        + "value='&#xf00d;' style='display: none' />"
                        + "<input type='button' class='col-md-1 btn btn-xs btn-danger btnDeleteAgrFile text-center fa' id='btnDeleteAgrFile' title='Remove file'"
                        + "value='&#xf1f8;' /></div>";
                }
                else {
                    attachmentLinks = "<div class='row' style='padding: 3px;'><span class='col-md-9 spanVal' id='valLink'><a style='word-wrap: break-word' href='javascript: "
                        + DownloadUrl + "(\"" + element.doc_name + "\",\"" + element.doc_id + "\");'>" + element.doc_name + "</a><input id='doc_seq' type='hidden' value=" + element.doc_seq + ">"
                        + "<input id='Agreementdoc_id' type='hidden' value=" + element.doc_id + "></span>"
                        + "<input type='button' class='col-md-1 btn btn-xs btn-yellow btnUpdateAgrFile text-center fa' id='btnUpdateAgrFile' title='Update file'"
                        + "value='&#xf040;' /><input type='button' class='col-md-2 btn btn-xs btn-danger btnCUpdateAgrFile text-center fa' id='btnCUpdateAgrFile' title='Update file'"
                        + "value='&#xf00d;' style='display: none' />"
                        + "<input type='button' class='col-md-1 btn btn-xs btn-danger btnDeleteAgrFile text-center fa' id='btnDeleteAgrFile' title='Remove file'"
                        + "value='&#xf1f8;' /></div>";
                }
            });
            $(HTMLElement_ID).html(attachmentLinks);
            attachmentLinks = attachmentLinks + "<div class='col-md-9' style='margin-left:-12px;'><input type='button' id='btnAddAgrFile' title='Add file'"
                + "class='col-md-8 btn btn-xs btn-primary btnAddAgrFile text-center' value='+ Add New' /></div>";
            $(HTMLElement_ID).html(attachmentLinks);
        }
        , showUpdateFileBtn: function () {
            $(".btnUpdateFile").click(function () {
                // get object per row when button clicked
                var item = $(this).parent();
                // to change button update to cancel
                item.find("input[type='button']").toggle();

                if (item.find("#oldFile").length == 0) {
                    // clone object for duplicate old file link value
                    var rowItem = item.find("#valLink");
                    rowItem.clone().prop('id', 'oldFile').prependTo(item);
                    var oldRowItem = item.find("#oldFile");
                    $("<strong id='fileInfo'>[Old File]</strong>").insertBefore(oldRowItem);

                    // add new input file after old file link
                    rowItem.html('<input type="file" id="FileEdit" class="FileEdit"  />');

                    // for input file style
                    $('.FileEdit').ace_file_input({
                        no_file: 'No File ...',
                        btn_choose: 'Choose',
                        btn_change: 'Change',
                        droppable: false,
                        onchange: null,
                        thumbnail: false,
                        whitelist: 'pdf',
                        icon_remove: false,
                    });
                }
                else {
                    item.find("strong[id='fileInfo']").show();
                    item.find("#valLink").show();
                }
            });

            $(".btnCUpdateFile").click(function () {
                // get object per row when button clicked
                var item = $(this).parent();

                // to change button update to cancel
                item.find("input[type='button']").toggle();
                if (item.find("input[type='file']").val() != "") {
                    item.find("a[class='remove']").click();
                }
                item.find("strong[id='fileInfo']").hide();
                item.find("#valLink").hide();

                $('#update-popup').data('bs.modal').handleUpdate();
            });

            //for agreement only
            $(".btnUpdateAgrFile").click(function () {
                // get object per row when button clicked
                var item = $(this).parent();
                // to change button update to cancel
                item.find("input[type='button']").toggle();

                if (item.find("#oldAgrFile").length == 0) {
                    // clone object for duplicate old file link value
                    var rowItem = item.find("#valLink");
                    rowItem.clone().prop('id', 'oldAgrFile').prependTo(item);
                    var oldRowItem = item.find("#oldAgrFile");
                    $("<strong id='fileInfo'>[Old File]</strong>").insertBefore(oldRowItem);

                    // add new input file after old file link
                    rowItem.html('<input type="file" id="FileAgrEdit" class="FileAgrEdit"  />');

                    // for input file style
                    $('.FileAgrEdit').ace_file_input({
                        no_file: 'No File ...',
                        btn_choose: 'Choose',
                        btn_change: 'Change',
                        droppable: false,
                        onchange: null,
                        thumbnail: false,
                        whitelist: 'pdf',
                        icon_remove: false,
                    });
                }
                else {
                    item.find("strong[id='fileInfo']").show();
                    item.find("#valLink").show();
                }
            });

            $(".btnCUpdateAgrFile").click(function () {
                // get object per row when button clicked
                var item = $(this).parent();

                // to change button update to cancel
                item.find("input[type='button']").toggle();
                if (item.find("input[type='file']").val() != "") {
                    item.find("a[class='remove']").click();
                }
                item.find("strong[id='fileInfo']").hide();
                item.find("#valLink").hide();

                $('#update-popup').data('bs.modal').handleUpdate();
            });
        }

        , showAddFileBtn: function () {
            $(".btnAddFile").click(function () {
                // get object per row when button clicked
                var item = $(this).parent();
                var HTML_Item = "<div class='row' style='padding: 3px;'><div class='col-md-9'><input type='file' id='FileAdd' class='col-md-9 FileAdd' /></div>"
                    + "<input type='button' class='btnCAddFile col-md-2 btn btn-xs btn-danger text-center fa' id='btnCAddFile'"
                    + "title='Update file' value='&#xf00d;' style=\"height: 30px\" /></div>"
                $(HTML_Item).insertBefore(item);

                // for input file style
                $('.FileAdd').ace_file_input({
                    no_file: 'No File ...',
                    btn_choose: 'Choose',
                    btn_change: 'Change',
                    droppable: false,
                    onchange: null,
                    thumbnail: false,
                    whitelist: 'pdf',
                    icon_remove: false,
                });

                $(".btnCAddFile").click(function () {
                    // get object per row when button clicked
                    var item = $(this).parent();
                    item.remove();
                });

                $('#update-popup').data('bs.modal').handleUpdate();
            });

            $(".btnAddAgrFile").click(function () {
                // get object per row when button clicked
                var item = $(this).parent();
                var HTML_Item = "<div class='row' style='padding: 3px;'><div class='col-md-9'><input type='file' id='FileAgrAdd' class='col-md-9 FileAgrAdd' /></div>"
                    + "<input type='button' class='btnCAddAgrFile col-md-2 btn btn-xs btn-danger text-center fa' id='btnCAddAgrFile'"
                    + "title='Update file' value='&#xf00d;' style=\"height: 30px\" /></div>"
                $(HTML_Item).insertBefore(item);

                // for input file style
                $('.FileAgrAdd').ace_file_input({
                    no_file: 'No File ...',
                    btn_choose: 'Choose',
                    btn_change: 'Change',
                    droppable: false,
                    onchange: null,
                    thumbnail: false,
                    whitelist: 'pdf',
                    icon_remove: false,
                });

                $(".btnCAddAgrFile").click(function () {
                    // get object per row when button clicked
                    var item = $(this).parent();
                    item.remove();
                    $('#btnAddAgrFile').removeClass('hide');
                });

                $('#btnAddAgrFile').addClass('hide');
                $('#update-popup').data('bs.modal').handleUpdate();
            });
        }

        , showDeleteFileBtn: function () {
            $(".btnDeleteFile").click(function () {
                var item = $(this).parent();
                item.hide();
                $('#update-popup').data('bs.modal').handleUpdate();
            });

            //for agreement only
            $(".btnDeleteAgrFile").click(function () {
                var item = $(this).parent();
                item.hide();
                $('#update-popup').data('bs.modal').handleUpdate();
                $('#btnAddAgrFile').removeClass('hide');
            });
        }
    }
    /* End */
}

/*
 Consolidate the JavaScript function for each page in here.
 Put the page/controller name.
 Example: sirima.Page.sirima0001
 */
sirima.Page = sirima.Page || {};

$(document).ready(function () {
    sirima.Elements.$b = sirima.Elements.$d.find('body');
    sirima.Components.LoadingHyperlink(sirima.Elements.$b.find('a.load-with-progress'));
});
