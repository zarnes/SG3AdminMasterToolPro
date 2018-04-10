function deleteSurgery(id)
{
    // TODO mettre des anti-spammer PARTOUUUUT
    var closestTr = jQuery('td[data-id=' + id + ']').closest('tr');

    // Anti bashing
    jQuery(closestTr).find('button.delete').off();
    jQuery(closestTr).find('button').addClass('disabled');
    jQuery(closestTr).find('button.delete').removeClass('animated-hover');
    jQuery(closestTr).find('button.delete i').removeClass('fa-times-o faa-flash');
    jQuery(closestTr).find('button.delete i').addClass('fa-cog faa-spin animated');

    jQuery.ajax({
        method: 'POST',
        url: '/include/ajax-api.php',
        data: {
            action: "deleteData",
            type: "surgery",
            data: {'id': id}
        }
    })
        .done(function(data){
            data = data.split('<br>');
            if (data[0] === '1')
            {
                notify('success', data[1]);
                jQuery(closestTr).closest('tr').remove();

            }
            else
            {
                jQuery(closestTr).find('button.delete').on('click', function(){
                    deleteSurgery(id);
                });
                jQuery(closestTr).find('button').removeClass('disabled');
                jQuery(closestTr).find('button.delete').addClass('animated-hover');
                jQuery(closestTr).find('button.delete i').addClass('fa-times-o faa-flash');
                jQuery(closestTr).find('button.delete i').removeClass('fa-cog faa-spin animated');

                notify('danger', data[1]);
            }
        });
}

jQuery('button.delete').on('click', function(){
    let id = parseInt(jQuery(this).closest('tr').find('td')[0].innerText);
    deleteSurgery(id);
});

jQuery(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'left',
        html: true
    });

    $(document).ready( function () {
        $('table.table').dataTable({
            "language": {"url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/French.json"},
            columnDefs: [
                /*{"targets": [0], "visible": false, "searchable": false}*/
                { targets: 'no-sort', orderable: false }
            ],
        });
    });
});