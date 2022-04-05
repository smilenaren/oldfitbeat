<?php
/*
  Template Name: Corporate Fitness Challenge - Live
 */
?>

<script>
    !function (f, b, e, v, n, t, s)
    {
        if (f.fbq)
            return;
        n = f.fbq = function () {
            n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq)
            f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2421226824795354');
    fbq('track', 'PageView');
</script>
<?php
get_header();
?>
<div class="page">
    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'page');

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>
</div>
<?php
get_footer();
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/selectize.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" crossorigin="anonymous"></script>
<script>
    jQuery(document).ready(function () {
        jQuery('.select').selectize();
        /*var $select = jQuery('.select-list').selectize({
         create: true,
         sortField: {
         field: 'text'
         }
         });*/

        var $select = jQuery('.select-list').selectize({
            valueField: 'title',
            labelField: 'title',
            searchField: 'title',
            create: true,
            sortField: {
                field: 'title'
            }
        });

        var control = $select[0].selectize;

        jQuery.ajax({
            url: 'https://sheets.googleapis.com/v4/spreadsheets/1G8zUzQjKlA4Tr_L6h6kS5DS39SO28IDIoS_CUFSXb0c/?key=AIzaSyBQCOcTHXYuBUAIBLEvgWeikZTraHZ2ENY&includeGridData=true',
            success: function (response) {
                response.sheets.forEach(function (sheet) {
                    //console.log(sheet.properties.title);
                    if (sheet.properties.title == 'Companies') {
                        //console.log(sheet.data);
                        var rowData = sheet.data[0].rowData;
                        //console.log(rowData);
                        rowData.forEach(function (row) {
                            //var company_name = row.values[0].effectiveValue.stringValue;
                            var company_name = row.values[0].formattedValue;
                            //console.log(company_name);
                            if (company_name != '') {
                                control.addOption({title: company_name});
                            }
                        });
                        //control.setValue(rowData[0].values[0].userEnteredValue.stringValue);
                    }
                });
            },
            error: function (request, status, error) {
                console.log('Ajax call error: ' + status + ', Server Response:' + request.responseText);
            }
        });

        jQuery('.wpcf7').on('wpcf7:mailsent', function () {
            console.log('JavaScript submit');
            fbq('track', 'CorporateLead');
            jQuery('body').append('<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1832164&conversionId=1099163&fmt=gif" />');
            window.location.replace("https://fitbeat.com/corporate-challenge-thank-you/");
        });
    });
</script>
<style>
    header.entry-header h1.entry-title {
        color: #ff621d;
    }
    .wpcf7-mail-sent-ok {
        display: none;
        opacity: 0;
    }
    .selectize-input.full,.selectize-input {
        background-color:  rgba(216,216,216,0.14);
        border: none;
        min-height: 48px;
        line-height: 1.7;
        padding-left: 20px;
        font-size: 16px;
    }
    .selectize-input, .selectize-control.single .selectize-input.input-active,
    .selectize-dropdown,.selectize-dropdown-content,
    .selectize-dropdown .create div {
        background-color:  #1f1f1f;
    }
    .selectize-dropdown .create,.selectize-dropdown, .selectize-input, .selectize-input input {
        color: #fff;
    }
    .selectize-dropdown .optgroup-header {
        color: #fff;
        background: #1f1f1f;
        cursor: default;
    }
    .selectize-dropdown .active {
        background-color: #1f1f1f;
        color: #fff;
    }
    .selectize-dropdown,
    .selectize-input,
    .selectize-input input,
    .selectize-dropdown .active.create {
        color:#fff;
    }
    .selectize-input input {
        padding-top: 4px !important;
    }
    .selectize-dropdown {
        border:none;
        padding-left: 10px;
        padding-bottom: 10px;
    }
    .selectize-dropdown .option {
        cursor: pointer;
    }
</style>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2421226824795354&ev=PageView&noscript=1"/></noscript>